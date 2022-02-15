@extends('admin.masteradmin')
@section('contentadmin')
@if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $ms)
                                    {{$ms}}
                                @endforeach
                            </div>
                        @endif
                        @if(session('messe'))
                            <div class="alert alert-success">
                                {{ session('messe')}}
                            </div>
                        @endif
  @foreach ($user as $us)
  <form action="/updateCustomer/{{$us->id}}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Tên</label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Nhập Tên" name="name" value="{{$us->name}}">
          </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  name="Email" value="{{$us->email}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password"  name="Password" value="{{$us->password}}">
      </div>
    </div>
    <br>
    <div class="form-check form-check-inline">
      @if($us->level == 1)
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$us->level}}" name="vitri" checked>
        <label class="form-check-label" for="inlineCheckbox1">Khách Hàng</label>
        <br>
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="vitri">
        <label class="form-check-label" for="inlineCheckbox1">Admin</label>
      @else
      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="vitri" >
        <label class="form-check-label" for="inlineCheckbox1">Khách Hàng</label>
        <br>
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$us->level}}" name="vitri" checked>
        <label class="form-check-label" for="inlineCheckbox1">Admin</label>
      @endif
  </div>
  <br>
    <button type="submit" class="btn btn-primary">Sửa</button>
  </form>
  @endforeach

@endsection