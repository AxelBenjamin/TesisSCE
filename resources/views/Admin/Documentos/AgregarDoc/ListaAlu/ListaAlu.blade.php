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

@include('Admin.layouts.partials.menuGU')    

	@if($mensaje == 'store')
		<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>Acción realizada con exito</p>
		</div>
	@endif

	{!! link_to_route('alu.create', 'Agregar Alumno', null, array('class' => 'btn btn-default')); !!}

	<div class="table-responsive">
	
	<table class="table table-stripped table-hover">
        <thead>
            <th>Grupo</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>
                <tr>
                    <td>{!!link_to_route('alu.show', $title = 'Visualizar', $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>

                    <td>{!!link_to_route('alu.edit', $title = 'Descargar', $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                </tr>
        </tbody>
    </table>


	</div>
@endsection
	
</body>
</html>