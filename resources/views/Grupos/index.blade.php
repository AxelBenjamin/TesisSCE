<!DOCTYPE html>
<html lang="en">

<?php
	$mensaje = Session::get('message')
?>

<head>
	<meta charset="UTF-8">

	@extends('layouts.master')
    
	<title>Sistema de Control Escolar</title>
</head>
<body>

@section('content2')

	@if($mensaje == 'store')
		<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>Acción realizada con exito</p>
		</div>
	@endif

	{!! link_to_route('gru.create', 'Agregar Grupo', null, array('class' => 'btn btn-default')); !!}

	<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Opciones</th>
		</thead>
	
	@foreach($Grupos as $Grupo) 
		<tbody>
			<th> {{$Grupo->nombre}} </th>
			<th> {!!link_to_route('gru.edit', $title = 'Editar', $parameters = $Grupo->id, $attributes = ['class'=>'btn btn-primary'])!!} </th>
			<th>{!! Form::open(['route' => ['gru.destroy', $Grupo->id], 'method'=>'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!} </th>
		</tbody>
	@endforeach
	</table>
	</div>
@endsection
	
</body>
</html>