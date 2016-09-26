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

	{!! link_to_route('mae.create', 'Agregar Maestro', null, array('class' => 'btn btn-default')); !!}

	<div class="table-responsive">
	
	<table class="table table-stripped table-hover">
        <thead>
            <th>Matricula</th>
            <th>Nombre</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>
            @foreach($Maestros as $Maestro)
                <tr>
                    <td>{{ $Maestro->matricula }}</td>
                    <td>{{ $Maestro->apa }}
                    {{ $Maestro->ama }}
                	{{ $Maestro->nombre }}</td>
                    
                    <td>{!!link_to_route('mae.show', $title = 'Mostrar', $parameters = $Maestro->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>

                    <td>{!!link_to_route('mae.edit', $title = 'Editar', $parameters = $Maestro->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    
                    <td>{!! Form::open(['route' => ['mae.destroy', $Maestro->id], 'method'=>'DELETE'])!!}
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