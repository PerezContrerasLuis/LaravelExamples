@extends('layout.admin')

@section('content')
   <table class="table">
   	<thead>
   		<th>Nombre</th>
   		<th>Correo</th>
   		<th>Operacion</th>
   	</thead>
   	<tbody>
   		@foreach ($users as $user)
		    <td>{{$user->name}}</td>
		    <td>{{$user->email}}</td>
		    <td></td>
		@endforeach
   	</tbody>
   </table>
@endsection