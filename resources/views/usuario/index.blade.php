@extends('layouts.admin');

<!--optimizando codigo -->
<?php //$message=Session::get('message')?>
<?php 
//@if($message == 'store')
//<div class="alert alert-success alert-dismissible" role="alert">
//  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
//  Usuario creado exitosamente
//</div>
//@endif
?>
<!--optimizando codigo -->
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif

@section('content')

<!-- table.table>(thead>th*3)>(tbody>td*3) -->
<table class="table">
	<thead>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Operacion</th>
	</thead>
	@foreach($luser as $varuser)
	<tbody>
		<td>{{$varuser->name}}</td>
		<td>{{$varuser->email}}</td>
		<td>
	   	  {!! link_to_route('usuario.edit',$title = 'Editar',$parameters = $varuser->id,$attributes =['class'=>'btn btn-primary'])!!}
		</td>
	</tbody>
	@endforeach
</table>


@stop
