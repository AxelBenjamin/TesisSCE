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

@include('layouts.partials.menuGM')    

	@if($mensaje == 'store')
		<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>Acción realizada con exito</p>
		</div>
	@endif

	{!! link_to_route('tem.create', 'Agregar Tema', null, array('class' => 'btn btn-default')); !!}

	<div class="table-responsive">
	
	<table class="table table-stripped table-hover">
        <thead>
            <th>Tema</th>
            <th>Unidad</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>
            @foreach($Temas as $Tema)
                <tr>
                	<td>{{ $Tema->nombre }}</td>
                    <td>{{ $Tema->unidads->nombre }}</td>

                    <td>{!!link_to_route('tem.edit', $title = 'Editar', $parameters = $Tema->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    
                    <td>{!! Form::open(['route' => ['tem.destroy', $Tema->id], 'method'=>'DELETE'])!!}
						{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!} 
					{!! Form::close() !!} </td>
                </tr>
            @endforeach
        </tbody>
    </table>


	</div>
@endsection
	
</body>
</html>