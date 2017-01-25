<?php
	$mensaje = Session::get('message')
?>

@extends('Admin.layouts.master')
    
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
            <th>Clave</th>
            <th>Nombre</th>
            <th>Semestre</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>
            @foreach($Materias as $Materia)
                <tr>
                	<td>{{ $Materia->clave }}</td>
                    <td>{{ $Materia->nombre }}</td>
                    <td>{{ $Materia->semestres->nombre }}</td>

                    <td>{!!link_to_route('mat.show', $title = 'Mostrar Acuerdo de Grupo', $parameters = $Materia->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>

                    <td>{!!link_to_route('mat.edit', $title = 'Descargar', $parameters = $Materia->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>


	</div>
@endsection