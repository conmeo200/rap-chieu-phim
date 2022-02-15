<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phim;
use App\Models\ql_phim_xc;
use App\Models\Type_Phim;
use App\Models\XuatChieu;
use App\Models\Phong;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\File;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phim=Type_Phim::getType();
        return view('admin.managerfilm',['phim'=>$phim]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addFilm(Request $request)
    {
        $suatchieu=$request->suatchieu;
        $pxhieu=$request->phongchieu;
        $film_new = new Phim();
        $film_new->TenPhim=$request->NameTP;
        $film_new->NoiDung=$request->noidung;
        $film_new->ID_Loai=$request->get('loaiphim');
        if($request->fileToUpload){
            $img=$request->new_image->getClientOriginalName();

            $request->image=$request->new_image->move(public_path('source\img\IMG'),$img);
            $film_new->image=$img;
        }
        $film_new->save();
        $data= Phim::where('TenPhim',$film_new->TenPhim)->select('ID')->get();
        foreach($data as $value)
        {
            $TAM=($value->ID);
        }    
        $array_sc= Array();
        $array_pc= Array();
        $array_sc=$suatchieu;
        $array_pc=$pxhieu; 
            foreach($array_sc as $value){
                $ql_xc =new ql_phim_xc();
                $ql_xc->ID_Phim=$TAM;
                $ql_xc->ID_XC=$value;
                foreach($array_pc as $key=>$value1){
                    $ql_xc->SoPhong=$value1; 
                    unset($array_pc[$key]);
                    break;
                };
                 $ql_xc->save();
            }; 
        return redirect()->back()->with('messe','Thêm Phim Thành Công !.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phong=Phong::all();
        $suatchieu=XuatChieu::all();
        $film =Type_Phim::getFilm($id);  
        $qlXC=ql_phim_xc::getAll($id);
        return view('admin.editfilm',['data'=>$film,'qlXC'=>$qlXC,'phong'=>$phong,'suatchieu'=>$suatchieu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    
            $suatchieu=$request->suatchieu;
            $pxhieu=$request->phongchieu;
            $film_new = new Phim();
            $film_new->TenPhim=$request->NameTP;
            $film_new->NoiDung=$request->noidung;
            $film_new->ID_Loai=$request->get('loaiphim');
            $old_img = $request->old_image;
            $new_img = $request->new_image;
            if($new_img != ''){
                $uploadImg=$new_img;
                $img=$uploadImg->getClientOriginalName();
                $request->image=$uploadImg->move(public_path('source\img\IMG'),$img);
                $film_new->image=$img;
                $updatePhim=DB::table('phim')
                            ->where('ID',$id)
                            ->update([
                                'TenPhim'=>$film_new->TenPhim,
                                'NoiDung'=>$film_new->NoiDung,
                                'ID_Loai'=>$film_new->ID_Loai,
                                'image'  =>$film_new->image
                            ]);

            }else{
                $uploadImg=$old_img;
                $updatePhim=DB::table('phim')
                            ->where('ID',$id)
                            ->update([
                                'TenPhim'=>$film_new->TenPhim,
                                'NoiDung'=>$film_new->NoiDung,
                                'ID_Loai'=>$film_new->ID_Loai,
                            ]);
            }   
                $id_phim= ql_phim_xc::where('ID_Phim',$id)->select('ID')->get();
                $array_ID= Array();
                foreach($id_phim as $ID){
                    array_push($array_ID,$ID->ID);
                }
                    $array_sc= Array();
                    $array_pc= Array();
                    $array_sc=$suatchieu;
                    $array_pc=$pxhieu;
                        foreach($array_ID as $key=>$idP){ 
                                    foreach($array_sc as  $key1=>$value){ 
                                            foreach($array_pc as $key2=>$value1){ 
                                                $update =ql_phim_xc::where(['ID_Phim'=>$id,'ID'=>$idP])
                                                            ->update([
                                                                'ID_XC'=>$value, 
                                                                'SoPhong'=>$value1 
                                                            ]);                                             
                                                unset($array_pc[$key2]); 
                                                break;
                                            }
                                            unset($array_sc[$key1]);
                                        break;
                                    }
                                    unset($array_ID[$key]);
                            }      
                           
        return redirect()->back()->with('messe','Cập Nhật Phim Thành Công !.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film=Phim::where('ID',$id)->get();
        dd($film);die;
        $film->delete();
        return redirect()->route('index')->with("messe","Xóa Thành Công !");
    }
    public function checkLogin(Request $request)
    {
        $arr=[
            'Email' => $request->Email,
            'password' =>$request->Password
        ];
        if (Auth::attempt($arr)) {
            return redirect()->route('index');
        }else{
            return redirect('/adminL')->with('messe','Tài khoản và mật khẩu không hợp lệ !');
        }
    }
    public function checkOut(Request $request)
    {
        Auth::logout();
        return redirect('/adminL');
    }
}
