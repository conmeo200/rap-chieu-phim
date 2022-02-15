@extends('admin.masteradmin')
@section('contentadmin')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ Tên</th>
                    <th>Email</th>
                    <th>Vị Trí</th>
                    <th>Chỉnh Sửa</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($user as $us)
                <tr>
                    <td>{{$us->id}}</td>
                    <td>{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>
                        @if($us->level == 1)
                            <label class="form-check-label" for="defaultCheck1">Khách Hàng</label>
                        @else
                            <label class="form-check-label" for="defaultCheck1">Admin</label>
                        @endif
                    </td>
                        <td>
                            <a href="/editCustomer/{{$us->id}}"><button type="button" class="btn btn-primary">Sửa</button></a>
                            <a href="#"><button type="button" class="btn btn-danger">Xóa</button></a>
                        </td>
                </tr>         
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection