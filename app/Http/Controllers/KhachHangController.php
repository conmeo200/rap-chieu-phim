<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\P7;
use App\Models\Phim;
use App\Models\Ve;

class KhachHangController extends Controller
{
    // Sự kiện của user
    public function getLogin()
    {
        return view('Line.login');
    }
    public function getSignup()
    {
        return view('Line.signup');
    }
    public function Login(Request $request)
    {
        $arr=[
            'Email' => $request->email,
            'password' =>$request->password
        ];
        
        if (Auth::attempt($arr)) {
            return redirect('/');
        }else{
            return redirect('/login')->with('messe','Tài khoản và mật khẩu không hợp lệ !');
        }
    }
    public function Signup(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
        ],
        [
            'name.required'=>'Vui lòng nhập tên.',
            'email.required'=>'Vui lòng nhập email.',
            'email.Email'=>'Không đúng định dạng email.',
            'email.unique'=>'Email đã tồn tại.',
            'password.required'=>'Vui lòng nhập password.',
            'password.min'=>'Vui lòng nhập ít nhất 6 ký tự.',

        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->level=1;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('messe','Đăng ký thành công !');
    }
    public function requestChair(Request $request)
    {
        $user =Auth::user()->id;
        $thongTin=$request->dataVe;  
            if($thongTin)
            {
                $thongTinPhim=$thongTin["thongTinPhim"];
                    $idPhim=$thongTinPhim["idPhim"];
                    $tenPhim=$thongTinPhim["tenPhim"];
                    $soPhong=$thongTinPhim["soPhong"];
                $thoiGian=$thongTinPhim["thoiGian"];
                $thongTinVe=$thongTin["thongTinVe"];
                $tongTien=$thongTin["tongTien"];
                $tongVe=$thongTin["tongVe"];
                    if($thongTinVe)
                    {
                        foreach($thongTinVe as $ch){
                            $ve =new Ve();
                            $ve->ID_Phim = $idPhim;
                            $ve->ID_User = $user;
                            $ve->TenPhim =$tenPhim;
                            $ve->XuatChieu = $thoiGian;
                            $ve->Ghe = $ch;
                            $data = DB::table('P7')
                                            ->where('ID',$ch)
                                            ->update(['Status'=> 1]);    
                             $ve->save();
                        }
                        return  response()->json(['success'=>'ĐẶT CHỔ THÀNH CÔNG !']);
                    }else{
                        return  response()->json(['success'=>'Khách Hàng Chưa Đặt Ghế !']);
                    }
            }else{
                 return  response()->json(['success'=>'Đặt Chổ Thất Bại']);
            }
    }
    public function logout(Request $request)
    {
        Auth::logout();
    return redirect('/');

    }
    public function getSearch(Request $request)
    {
            $dataTest=$request->data;
            $dataPhim=Phim::where('TenPhim','like','%'.$dataTest.'%')->get();
            return $dataPhim;            
    }
    // -----------------------------------------------------------------------------------------------------

    //Chức năng quản lý user của admin 
    public function getCustomerAll()
    {
        $user=User::all();
        return view('admin.managercus',['user'=>$user]);
    }
    public function editCustomer($id)
    {
        $user = User::where('id',$id)->get();
        return view('admin.editcustomer',['user'=>$user]);
    }
    public function updateCustomer(Request $request,$id)
    {
            $user=new User();
            $user->name=$request->name;
            $user->email=$request->Email;
            $user->password=Hash::make($request->Password);
            $user->level=$request->vitri;
            $updateUser=DB::table('users')
                            ->where('id',$id)
                            ->update(
                                [
                                    'name'=>$user->name,
                                    'email'=>$user->email,
                                    'password'=>$user->password,
                                    'level'=>$user->level
                                ]);
                            
            return redirect()->back()->with('messe','Cập nhật thành công !');

    }
    public function delete($id)
    {
        $film=User::find('id',$id);
        $film->delete();
        return redirect()->route('index')->with("messe","Xoa thanh cong !");
    }
    public function addCustomer(Request $request)
    {
        $data=$request->suatchieu;
        foreach($data as $value){
            $data1=$value;
        }
        
            // $this->validate($request,
            // [
            //     'name'=>'required',
            //     'email'=>'required|email|unique:users,email',
            //     'password'=>'required|min:6|max:20',
            // ],
            // [
            //     'name.required'=>'Vui lòng nhập tên.',
            //     'email.required'=>'Vui lòng nhập email.',
            //     'email.Email'=>'Không đúng định dạng email.',
            //     'email.unique'=>'Email đã tồn tại.',
            //     'password.required'=>'Vui lòng nhập password.',
            //     'password.min'=>'Vui lòng nhập ít nhất 6 ký tự.',
    
            // ]);
            $user=new User();
            $user->name=$request->name;
            $user->email=$request->Email;
            $user->level=$data1;
            $user->password=Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('messe','Đăng ký thành công !');
    }
    // -----------------------------------------------------------------------------------------------------
    
}
