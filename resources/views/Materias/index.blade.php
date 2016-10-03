<?php
	$mensaje = Session::get('message')
?>

@extends('layouts.master')
    
@section('content2')

@include('layouts.partials.menuGM')

	@if($mensaje == 'store')
		<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>Acción realizada con exito</p>
		</div>
	@endif

	{!! link_to_route('mat.create', 'Agregar Materia', null, array('class' => 'btn btn-default')); !!}

	<div class="table-responsive">
	
	<table class="table table-stripped table-hover">
        <thead>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Semestre</th>
            <th>Maestro</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>
            @foreach($Materias as $Materia)
                <tr>
                	<td>{{ $Materia->clave }}</td>
                    <td>{{ $Materia->nombre }}</td>
                    <td>{{ $Materia->semestres->nombre }}</td>
                    <td>{{ $Materia->maestros->apa }}
                        {{ $Materia->maestros->ama }}
                        {{ $Materia->maestros->nombre }}
                    </td>

                    <td>{!!link_to_route('mat.show', $title = 'Mostrar', $parameters = $Materia->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>

                    <td>{!!link_to_route('mat.edit', $title = 'Editar', $parameters = $Materia->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    
                    <td>{!! Form::open(['route' => ['mat.destroy', $Materia->id], 'method'=>'DELETE'])!!}
						{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!} 
					{!! Form::close() !!} </td>
                </tr>
            @endforeach
        </tbody>
    </table>


	</div>
@endsection