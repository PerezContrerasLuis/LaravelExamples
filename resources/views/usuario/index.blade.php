@extends('layout.admin')

<!-- creamos variable de mensaje -->
<?php $message=Session::get('message')?>

@if ($message=='store')
   <div class="alert alert-success" role="alert">Usuario registrado con exito</div>
@endif

@if ($message=='Supdate')
   <div class="alert alert-success" role="alert">Usuario actualizado con exito</div>
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
		    <td>
		    	{!!link_to_route('usuario.edit', $title = 'editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}
		    </td>
		    </tbody>
		@endforeach
   </table>
@endsection