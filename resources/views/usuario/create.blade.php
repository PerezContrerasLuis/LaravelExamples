@extends('layout.admin')

@section('content')
   <form action="">
   	<div class="form-group">
   		<label for="">Nombre</label>
   		<input type="text" class="form-control">
   	</div>
   	<div class="form-group">
   		<label for="">correo</label>
   		<input type="text" class="form-control">
   	</div>
   	<div class="form-group">
   		<label for="">contraseña</label>
   		<input type="text" class="form-control">
   	</div>
   	<button class="btn btn-primary">Registrar</button>
   </form>
@endsection