@extends('Line.master')
@section('content')
<div class="card text-center">
  <br>
  @foreach ($TG_SP as $a)
    <button type="button" class="btn btn-secondary" value="{{$a->SoPhong}}" id="sophong" >SỐ PHÒNG :{{$a->SoPhong}} </button>
    <button type="button" class="btn btn-light"  value="{{$a->TG}}" id="thoigian">THỜI GIAN :{{ $a->TG}}</button>
  @endforeach
  <br>
    <div class="card-body">
        <div class="card-header">
            MÀN HÌNH
        </div>
        <br>
        <br>
        <div class="container">
            
            <div class="row align-items-start" id="chair">
                @foreach ($chair as $ch)
              <div class="col-3">
                <ol class="nav-item" >
                    @if ($ch->Status==1)
                    <button type="button" name ="{{$ch->ID}}" class="btn btn-danger" style="width: 50%" value="{{$ch->ID}}" onclick="red()">Ghế số {{$ch->ID}}</button>
                    @else
                    <button type="button" name ="{{$ch->ID}}" class="btn btn-primary" style="width: 50%" value="{{$ch->ID}}" >Ghế số {{$ch->ID}}</button>
                    @endif 
                </ol>
              </div>
              @endforeach
            </div>
                    <br>
        </div>
        <br>
        <div class="card-footer text-muted">
            <br>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <button type="button" class="btn btn-danger">GHẾ ĐÃ ĐẶT</button>&ensp;
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" >GHẾ TRỐNG</button>&ensp;
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="ketthuc">
                        XEM THÔNG TIN ĐẶT VÉ
                      </button>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Thông Tin Vé</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul>
            @foreach ($film as $phim )
              <li value="{{$phim->ID}}" id="idPhim" >ID Phim : {{$phim->ID}} </li>
              <li value="{{$phim->TenPhim}}" id="tenPhim" >Tên Phim : <strong>{{$phim->TenPhim}}</strong> </li>
              @endforeach
              <li id="sove" value="sove"></li>
              <li id="soghe" ></li>
              @foreach ($gia as $gi)
                <li id="gia" value="{{$gi->Gia}}">Giá :{{$gi->Gia}}</li>
              @endforeach
              <li id="tong" value=""></li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="huy">HỦY</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="datve">ĐẶT VÉ</button>
        </div>
        <div class="modal-body">
            
        </div> 
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function red(){
        alert("vi tri da dc dat!");    
    }
        
        var tongTien =0;
        var tongVe =0;
        var thongTinVe=new Array();
        var soPhong=$("#sophong").val();
        var thoiGian=$("#thoigian").val();
        var idPhim=$("#idPhim").val();
        var tenPhim=document.querySelector("#tenPhim strong").innerHTML;
        var thongTinPhim={
          idPhim:idPhim,
          soPhong:soPhong,
          thoiGian:thoiGian,
          tenPhim:tenPhim
        };
      $(document).ready(function(){
          $("#chair").find("button").click(function(){
            $(this).css("background-color", "red");
                var value=$(this).val();
                var gia=$("#gia").val();
                
                if(thongTinVe.includes(value)){
                  $(this).css("background-color", "blue");
                  thongTinVe.pop(value);
                }else{
                  thongTinVe.push(value);  
                }
                $("#ketthuc").click(function(){
                      var sove1=thongTinVe.length; 
                      var tong=sove1*gia;
                     $("#sove").html("Số Vé :" +thongTinVe.length);
                     $("#soghe").html("Số Ghế : " +thongTinVe + ',');
                     $("#tong").html("Tổng : " +tong);      
                     tongTien=tong;  
                     tongVe=sove1;    
                });
                
        });   
        
        $("#datve").click(function(){;
            var dataVe={
              thongTinVe:thongTinVe,
              thongTinPhim:thongTinPhim,
              tongTien:tongTien,
              tongVe:tongVe
              };
              
            $.ajax({
              url: "/request-ajax",
              type:'post',
              data: {_token:$('meta[name="csrf-token"]').attr('content'),dataVe:dataVe},
              success: function(response) {
                      if(response.success)
                      {

                      }
                  
              }
              });            
        });
      });
  </script>
@endsection