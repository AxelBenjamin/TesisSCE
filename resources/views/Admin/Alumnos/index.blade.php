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
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Grupo</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>
            @foreach($Alumnos as $Alumno)
                <tr>
                    <td>{{ $Alumno->matricula }}</td>
                    <td>{{ $Alumno->apa }}
                    {{ $Alumno->ama }}
                	{{ $Alumno->nombre }}</td>
                    <td>{{ $Alumno->grupos->nombre }}</td>
                    
                    <td>{!!link_to_route('alu.show', $title = 'Mostrar', $parameters = $Alumno->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>

                    <td>{!!link_to_route('alu.edit', $title = 'Editar', $parameters = $Alumno->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    
                    <td>{!! Form::open(['route' => ['alu.destroy', $Alumno->id], 'method'=>'DELETE'])!!}
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