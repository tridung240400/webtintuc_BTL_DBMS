@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người dùng
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                @if (count($errors)>0)
                        <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach       
                        </div>
                @endif
                @if (session('Exception'))
                     <div class="alert alert-danger">
                        {{session('Exception')}}
                     </div>
                @endif
                @if (session('thongbao'))
                        <div class="alert alert-success">
                        {{session('thongbao')}} 
                        </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Quyền</th>
                            <th>Xoá</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $u)
                            <tr class="odd gradeX" align="center">
                            <td>{{$u->id}}</td>
                            <td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
                            <td>
                                @if ($u->quyen==0)
                                            {{'Thường'}}
                                @else {{'Quản trị'}}
                                @endif
                            </td>
                            <td class="center">
                                <form action="admin/user/{{$u->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                </form>
                            </td>
                            <td class="center">
                                <form action="admin/user/{{$u->id}}/edit">
                                    <button type="submit" style="display: inline;" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection
