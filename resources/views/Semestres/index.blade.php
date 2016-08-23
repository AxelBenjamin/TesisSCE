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

	{!! link_to_route('sem.create', 'Nuevo Registro', null, array('class' => 'btn btn-default')); !!}

	<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
	
	@foreach($Semestres as $Semestre) 
		<tbody>
			<th> {{$Semestre->nombre}} </th>
			//Falta editar y eliminar
		</tbody>
	@endforeach
	</table>
	</div>
@endsection
	
</body>
</html>