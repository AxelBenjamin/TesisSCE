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

@include('Admin.layouts.partials.menuGM')    

	@if($mensaje == 'store')
		<div class="alert alert-warning alert-dismissible" role="alert">
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		<p>Acción realizada con exito</p>
		</div>
	@endif

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    {!! link_to_route('tem.create', 'Agregar Tema', null, array('class' => 'btn btn-default')); !!}
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Temas</h4> </div>    
                </div>
            </div>        
        </div>
    </div>

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