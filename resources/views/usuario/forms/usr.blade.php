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