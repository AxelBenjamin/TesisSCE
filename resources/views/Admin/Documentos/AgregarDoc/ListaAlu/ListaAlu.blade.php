<!DOCTYPE html>
<html lang="en">

<?php
	$mensaje = Session::get('message')
?>

<head>
	<meta charset="UTF-8">

	@extends('Admin.layouts.master')
    
	<title>Sistema de Control Escolar</title>
</head>
<body>

@section('content2')

@include('Admin.layouts.partials.menuGD')    

	@if($mensaje == 'store')
		<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>Acción realizada con exito</p>
		</div>
	@endif

    <div class="table-responsive">
    <table class="table table-stripped table-hover">
        <thead>
            <th>Grupo</th>
            <th colspan="2">Opciones</th>
        </thead>

        @foreach($Grupos as $Grupo) 
        <tbody>
            <th> {{$Grupo->nombre}} </th>

            <th>{!!link_to_action('ListaAlumnos@crear_lista_alumnos', $title = 'Mostrar Lista', $parameters = array('1' , $Grupo->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

            <th>{!!link_to_action('ListaAlumnos@crear_lista_alumnos', $title = 'Descargar', $parameters = array('2' , $Grupo->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>
            
        </tbody>
        @endforeach   
    
    </table>
	</div>
@endsection

</body>
</html>