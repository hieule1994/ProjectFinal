@extends('admin.share.__layout')

@section('styles')
@stop
@section('scripts')
@stop

@section('mainbody')

<div class="main-body-menu">
	<div class="title-menu">Cấu trúc menu: </div>
	<div class="cont-menu">
		{!! Form::open(array('url'=>'admin/changemenu','method'=>'post')) !!}
			<ul>
				<li>{!! Form::text('menu','menu')!!}</li>
			</ul>
		{!! Form::close() !!}
	</div>
</div>
@stop