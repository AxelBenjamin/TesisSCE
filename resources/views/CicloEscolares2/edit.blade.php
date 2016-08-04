@extends('layouts.master')

@section('content2')

{!! Form::model($CicloEscolar, ['route' => ['ce.update', $CicloEscolar->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	<div class="form-group">
 		<div class="col-lg-3">
 			{!! Form::label('nombre','Nombre:',['class' => 'control-label'])!!}
 		</div>
 		<div class="col-lg-5">
			{!! Form::text('nombre',null,['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-3">
			{!! Form::label('fechaInicio', 'Fecha de inicio:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-3">
			{!! Form::label('fechaFinal', 'Fecha de término:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::date('fechaFinal', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('ce.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection