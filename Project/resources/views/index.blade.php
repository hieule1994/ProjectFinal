@extends('share.__layout')
@section('scripts')
    @if(Session::has('flag'))
        <script>
            alert("Bạn đã đăng ký thành công! Hãy đăng nhập vào hệ thống!")
        </script>
    @endif
@stop
@Section('center')
	@include('share.__centerLayout')
@stop