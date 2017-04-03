@extends('layout.admin')

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