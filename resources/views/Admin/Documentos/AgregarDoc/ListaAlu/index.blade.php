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
    {!! link_to_route('ListaAlumnos.create', 'Agregar Lista de Alumnos', null, array('class' => 'btn btn-default')); !!}
    <table class="table table-stripped table-hover">
        <thead>
            <th>Grupo</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>
            @foreach($ListaAlumnos as $ListaAlumno)
                <tr>
                    <td>
                    {{$ListaAlumno->grupos->nombre}}
                    </td>

                    <td>{!! link_to_route('ListaAlumnos.show', $title='Mostrar', $parameters=$ListaAlumno
                    ->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to_route('ListaAlumnos.edit', $title='Editar', $parameters=$ListaAlumno
                    ->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <th>{!! Form::open(['route' => ['ListaAlumnos.destroy', $ListaAlumno
                    ->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!} </th>


                </tr>
            @endforeach
            
        </tbody>  
    
    </table>
	</div>
@endsection

</body>
</html>