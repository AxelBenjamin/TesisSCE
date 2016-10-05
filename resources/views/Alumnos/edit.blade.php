@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGU')

{!! Form::model($Alumno, ['route' => ['alu.update', $Alumno->id], 'method'=>'PUT', 'class'=> 'form-horizontal', 'files' => true]) !!}

 	@include('Alumnos.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('alu.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection