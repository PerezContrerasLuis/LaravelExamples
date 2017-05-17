@extends('layout.admin')

@section('content')
   <!-- incluimos la etiqueta que muestra errores si existen -->
   @include('alerts.request')
   <!-- <form action="usuario.store" method="post"> -->
   {!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method'=>'PUT'])!!}
   	@include('usuario.forms.usr')
   	<button class="btn btn-primary">Actualizar</button>
   {!! Form::close() !!}

   <br/>
   <!-- form para eliminar un usuario -->
    {!!Form::open(['route' => ['usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
      <button class="btn btn-danger">Eliminar</button>
   {!! Form::close() !!}
@endsection