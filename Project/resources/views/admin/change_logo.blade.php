@extends("admin.share.__layout")
@section("styles")
	<link rel="stylesheet" type="text/css" href="{{url('css/admin_css.css')}}">
@stop
@section("scripts")
	<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
		/* image preview */
		$('#file').change(function(){
		    var oFReader = new FileReader();
		    oFReader.readAsDataURL(this.files[0]);
		    console.log(this.files[0]);
		    oFReader.onload = function (oFREvent) {
		        $('#preview').html('<img src="'+oFREvent.target.result+'">');
		    };
		});

		});//]]>  

		</script> 
@stop
@section("mainbody")
    {!! Form::open(array('url'=>'admin/changelogo','enctype'=>'multipart/form-data','method'=>'post')) !!}
    <div class="form-group">
    	{!!Form::label('email', 'Chọn hình ảnh làm logo:')!!}
   		{!! Form::file('image',array('class'=>'form-control','id'=>'file'))!!}
   	</div>
   	<div class="form-group">
    	{!! Form::submit('Lưu',array('class'=>'btn btn-primary'))!!}
    </div>
    {!! Form::close() !!}

    <div class="show-image">
    	<div id="preview">This Part of the HTML SECTION will be replaced with your image</div>
    </div>
@stop