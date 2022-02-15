@extends('admin.masteradmin')
@section('contentadmin')


                        @if(session('messe'))
                            <div class="alert alert-success">
                                {{ session('messe')}}
                            </div>
                        @endif
@foreach ($data as $phim)
<form action="/update/{{$phim->ID}}" method="post" enctype="multipart/form-data">
  @csrf

  <div class="form-group" method="post">
    <label for="email">Tên Phim :</label>
    <input type="text" class="form-control" placeholder="Nhập Tên Phim"  name="NameTP" autofocus value="{{$phim->TenPhim}}">
  </div>
  <br>
  <div class="form-group">
    <label for="email">Thể Loại :</label>
    <select class="form-control form-control-sm" name="loaiphim">
      @if($phim->ID_Loai == 1)
        <option value="1">Hành Động</option>
        <option value="2">Hoạt Hình</option>
        <option value="3">Lãng Mạn</option>
      @elseif($phim->ID_Loai == 2) 
        <option value="2">Hoạt Hình</option>
        <option value="1">Hành Động</option>
        <option value="3">Lãng Mạn</option>
      @else
        <option value="3">Lãng Mạn</option>
        <option value="1">Hành Động</option>
        <option value="2">Hoạt Hình</option>
      @endif
    </select>
  </div>
  <br>
  <p>Có {{count($qlXC)}} suất chiếu</p>
  @foreach ($qlXC as $ql)
    <div class="form-group" >
      <label > Suất Chiếu  :</label>
        @foreach ($suatchieu as $sc)
          <div class="form-check form-check-inline">
              @if($ql->ID_XC == $sc->ID)
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$sc->ID}}" name="suatchieu[]" checked>
                <label class="form-check-label" for="inlineCheckbox1">{{$sc->TG}}</label>
              @else
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$sc->ID}}" name="suatchieu[]" >
                <label class="form-check-label" for="inlineCheckbox1">{{$sc->TG}}</label>
              @endif
          </div>
        @endforeach
    </div>
      <div class="form-group" name="phongchieu">
        <label > Phòng Chiếu  :</label>
          @foreach ($phong as $ph)
            <div class="form-check form-check-inline">
                @if($ql->SoPhong == $ph->ID)
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$ph->ID}}" name="phongchieu[]" checked>
                  <label class="form-check-label" for="inlineCheckbox1">{{$ph->SoPhong}}</label>
                @else
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$ph->ID}}" name="phongchieu[]" >
                  <label class="form-check-label" for="inlineCheckbox1">{{$ph->SoPhong}}</label>
                @endif
            </div>
           @endforeach
    </div>
    <hr>
  @endforeach
  <br>
  <div class="form-group">
    <label for="comment">Nội Dung :</label>
    <textarea class="form-control" rows="10" id="comment" name="noidung">{{$phim->NoiDung}}</textarea>
  </div>
  <br>
  <div class="input-group">
    <div class="custom-file">
      <img src="source/img/IMG/{{$phim->image}}" alt="">
      <input type="hidden" name="old_image" value="{{asset('source/img/IMG/'.$phim->image)}}">
    </div>
  </div>
  <div class="form-group">
      Chọn Hình Ảnh :
    <br>
    <input type="file" name="new_image" id="fileToUpload" value="" enctype="multipart/form-data">
    </div>
  <br> 

  <button type="submit" class="btn btn-primary">Sửa</button>
</form>
@endforeach
@endsection