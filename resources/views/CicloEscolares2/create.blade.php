@extends('layouts.master')

@section('content2')

{!! Form::open(['route' => 'ce.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	<div class="form-group">
 		<div class="col-lg-2">
 			{!! Form::label('nombre','Nombre:',['class' => 'control-label'])!!}
 		</div>
 		<div class="col-lg-5">
			{!! Form::text('nombre',null,['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			{!! Form::label('fechaInicio', 'Fecha de Inicio:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			{!! Form::label('fechaFinal', 'Fecha de Termino:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::date('fechaFinal', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
	</div>
 
{!! Form::close() !!}

@endsection