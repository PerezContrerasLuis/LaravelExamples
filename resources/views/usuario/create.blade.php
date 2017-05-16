@extends('layout.admin')

@section('content')
   <!-- <form action="usuario.store" method="post"> -->
   {!!Form::open(['route' => 'usuario.store','method'=>'POST'])!!}
   	@include('usuario.forms.usr')
   	<button class="btn btn-primary">Registrar</button>
   {!! Form::close() !!}
@endsection