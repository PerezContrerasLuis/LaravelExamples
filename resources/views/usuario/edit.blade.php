@extends('layout.admin')

@section('content')
   <!-- <form action="usuario.store" method="post"> -->
   {!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method'=>'PUT'])!!}
   	<div class="form-group">
	 {!!Form::label('nombre','Nombre')!!}
	 {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'ingresa el nombre del usuario'])!!}
	</div>
   	<div class="form-group">
   		{!!Form::label('correo','correo')!!}
   		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'ingresa el correo del usuario'])!!}
   	</div>
   	<div class="form-group">
   		{!!Form::label('pass','password')!!}
   		{!!Form::password('password',['class'=>'form-control','placeholder'=>'ingresa el nombre del usuario'])!!}
   	</div>
   	<button class="btn btn-primary">Registrar</button>
   {!! Form::close() !!}
@endsection