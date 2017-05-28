@extends('layout.admin')
@section('content')
	<div id="msj_edit" class="alert alert-success" role="alert" style="display:none">
		Edicion de genero realizada con exito 
	</div>
	<table class="table">
		<thead>
		</thead>
			<th>Nombre</th>
			<th>Operacion</th>
		<tbody id="tabladatos">
		</tbody> 
	</table>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Editar Genero</h4>
		      </div>
		      <div class="modal-body">
		        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token" />
				<input type="hidden" id="id" />
				<div class="form-group">
					{!!Form::label('genre','Nombre')!!}
					{!!Form::text('genre',null,$attributes=['id'=>'genre','class'=>'form-control','placeholder'=>'ingresa el nombre'])!!}
				</div>
		      </div>
		      <div class="modal-footer">
		        {!!link_to('#',$title='Actualizar',$attributes=['id'=>'actualizar','class'=>'btn btn-primary'],$secure=null)!!}
		      </div>
		    </div>
		  </div>
		</div>
@endsection