 <!-- verificamos si hay errores y los imprimimos -->
@if(Session::has('message-error'))
<div class="alert alert-danger" role="alert">
	{{Session::get('message-error')}}
</div>
@else
    Bienvenido
@endif
