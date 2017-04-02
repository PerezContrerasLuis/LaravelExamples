@extends('layout.admin')

@section('content')
   <!-- <form action="usuario.store" method="post"> -->
   {!!Form::open(['route' => 'usuario.store','method'=>'POST'])!!}
   	<div class="form-group">
   		<label for="">Nombre</label>
   		<input type="text" name="nombre" class="form-control">
   	</div>
   	<div class="form-group">
   		<label for="">correo</label>
   		<input type="mail" name="correo" class="form-control">
   	</div>
   	<div class="form-group">
   		<label for="">contraseña</label>
   		<input type="password" name="pas" class="form-control">
   	</div>
   	<button class="btn btn-primary">Registrar</button>
   {!! Form::close() !!}
@endsection