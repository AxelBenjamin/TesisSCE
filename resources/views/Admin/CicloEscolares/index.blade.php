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

@include('Admin.layouts.partials.menuGCE')

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
                    {!! link_to_route('ce.create', 'Agregar Ciclo Escolar', null, array('class' => 'btn btn-default')); !!}
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Ciclos Escolares</h4> </div>    
                </div>
            </div>        
        </div>
    </div>

	<div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<th>Nombre</th>
			<th>Fecha de Inicio</th>
			<th>Fecha de Termino</th>
			<th>Opciones</th>
		</thead>
	
	@foreach($CiclosEscolares as $CicloEscolar) 
		<tbody>
			<th> {{$CicloEscolar->nombre}} </th>
			<th> {{$CicloEscolar->fechaInicio}} </th>
			<th> {{$CicloEscolar->fechaFinal}} </th>
			<th> {!!link_to_route('ce.edit', $title = 'Editar', $parameters = $CicloEscolar->id, $attributes = ['class'=>'btn btn-primary'])!!} </th>
			<th>{!! Form::open(['route' => ['ce.destroy', $CicloEscolar->id], 'method'=>'DELETE']) !!}
					{!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!} </th>
		</tbody>
	@endforeach
	</table>
	</div>
@endsection
	
</body>
</html>