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
<form action="{{url('/addCustomer')}}" method="post"> 
  @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Tên </label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Nhập Tên" name="name">
          </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  name="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password"  name=">Password">
      </div>
      <div class="form-group" >
        <label >Level </label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="suatchieu[]">
          <label class="form-check-label" for="inlineCheckbox1">Khách Hàng</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="suatchieu[]">
          <label class="form-check-label" for="inlineCheckbox2">Admin</label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
@endsection