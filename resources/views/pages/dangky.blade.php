@extends('pages.layout.index')
@section('content')

       <div height="1500px">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</div>
       <!-- Page Content -->
       <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                      <div class="panel-heading lead">ĐĂNG KÝ TÀI KHOẢN</div>
                      <div height="100px">&nbsp;<br>&nbsp;</div>
				  	<div class="panel-body">
                        @if (count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                        @endif
                        @if (session('canhbao'))
                            <div class="alert alert-warning">
                                {{session('canhbao')}}
                            </div>
                        @endif
                        @if (session('thongbao'))
                            <div class="alert alert-success">
                            {{session('thongbao')}}<a href="login"> Đăng nhập!</a>
                            </div>
                        @endif
				    	<form action="register" method="post" class="p-5 bg-light">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Username" name="Ten" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="Email" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>
							<div>
				    			<label>Nhập mật khẩu</label>
							  	<input type="password" class="form-control" name="Password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="PasswordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<button type="submit" class="btn btn-default">Đăng ký
							</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
@endsection
