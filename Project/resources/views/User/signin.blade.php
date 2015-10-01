@extends('share.__layout')
@section('styles')
	<link rel="stylesheet" type="text/css" href="{{url('css/user_css.css')}}">
@stop
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.js"></script>
@stop
@Section('center')
<div class="center-content-re col-md-8">
    <div class="center_content ">
    	<div class="titlepage">
    		<h3>Đăng ký</h3>
    		<p>Cảm ơn bạn đã đăng ký vào hệ thống của chúng tôi!</p>
    	</div>
        <form action="{{url('user/signin')}}" method="post">
        <div class="group-control mrbt_10">
        	<label>Họ và tên: </label>
        	<input type='text' name="name" class="form-control" value="$Post['name']" placeholder="Nguyễn văn A" />
        </div>
        <div class="group-control mrbt_10">
        	<label>Tên đăng nhập: </label>
        	<input type='text' name="username" class="form-control" value="$Post['username']" placeholder="abc"/>
        </div>
        <div class="group-control mrbt_10">
        	<label>Mật khẩu: </label>
        	<input type='password' name="password" class="form-control" placeholder="abc"/>
        </div>
        <div class="group-control mrbt_10">
        	<label>Nhập lại mật khẩu: </label>
        	<input type='password' name="etpassword" class="form-control" placeholder="abc"/>
        </div>
        <div class="group-control mrbt_10">
        	<label>Email: </label>
        	<input type='email' name="email" class="form-control" value="$Post['email']" placeholder="abc@xyz.com"/>
        </div>
        <div class="group-control mrbt_10">
        	<label>Địa chỉ: </label>
        	<input type='text' name="address" class="form-control" value="$Post['address']" placeholder="Quận 9, tp.Hồ Chí Minh"/>
        </div>
        <div class="group-control mrbt_10">
        	<label>Số điện thoại: </label>
        	<input type='number' name="numberphone" class="form-control" value="$Post['numberphone']" placeholder="0905123123" />
        </div>
        <div class="group-control mrbt_10">
            <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary">
        </div>
       </form>
    </div>
</div>
@stop