@extends('layouts.admin')
@section('content')
<!--  mas informacion en :https://laravelcollective.com/docs/5.3/html -->
<!-- <form action="">
	<div class="form-group">
		<label for="">Nombre</label>
		<input type="text"class="form-control"></input>
	</div>
	<div class="form-group">
		<label for="">Correo</label>
		<input type="text"class="form-control"></input>
	</div>
	<div class="form-group">
		<label for="">Contrasena</label>
		<input type="password"class="form-control"></input>
	</div>
	<button class="btn btn-primry">Registrar</button>
</form> -->
@include('alerts.request')
    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
<!--   <div class="form-group">
	    	{!!Form::label('nombre','Nombre:')!!}
	 	 {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
       </div>
	   <div class="form-group">
		  {!!Form::label('email','Correo:')!!}
		  {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Correo del usuario'])!!}
	    </div>
	    <div class="form-group">
	    	{!!Form::label('password','Contraseña:')!!}
		    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la contraseña del usuario'])!!}
	    </div> -->
	      @include('usuario.forms.usr')
	    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop