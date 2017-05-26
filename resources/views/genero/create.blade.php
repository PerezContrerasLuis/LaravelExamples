@extends('layout.admin')
@section('content')
	<div class="alert alert-success" role="alert" style="display:none" id="msj_succes"> Genero creado correctamente
	</div>
	{!!Form::open()!!}
		<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
		@include('genero.form.genero')
		{!!link_to('#',$title='registrar',$attributes=['id'=>'registro','class'=>'btn btn-primary'],$secure=null)!!}
	{!!Form::close()!!}
@endsection