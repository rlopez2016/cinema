@extends('layouts.admin')

@section('content')
@include('alerts.request')
     {!!Form::model($euser,['route'=>['usuario.update',$euser],'method'=>'PUT'])!!}
	        @include('usuario.forms.usr')
	  <!--  <div class="form-group">
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
	    {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}


	{!!Form::open(['route'=>['usuario.destroy', $euser], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}

@endsection