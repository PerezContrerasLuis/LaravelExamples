@extends('layout.admin')

@section('content')
   <!-- <form action="usuario.store" method="post"> -->
   {!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method'=>'PUT'])!!}
   	@include('usuario.forms.usr')
   	<button class="btn btn-primary">Registrar</button>
   {!! Form::close() !!}
@endsection