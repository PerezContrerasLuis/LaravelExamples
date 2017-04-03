@extends('layout.admin')

<!-- creamos variable de mensaje -->
<?php $message=Session::get('message')?>

@if ($message=='store')
   <div class="alert alert-success" role="alert">Usuario registrado con exito</div>
@endif

@section('content')
   <table class="table">
   	<thead>
   		<th>Nombre</th>
   		<th>Correo</th>
   		<th>Operacion</th>
   	</thead>
   		@foreach ($users as $user)
   			<tbody>
		    <td>{{$user->name}}</td>
		    <td>{{$user->email}}</td>
		    <td></td>
		    </tbody>
		@endforeach
   </table>
@endsection