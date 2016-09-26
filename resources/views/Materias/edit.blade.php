@extends('layouts.master')

@section('content2')

{!! Form::model($Materia, ['route' => ['mat.update', $Materia->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('Materias.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('mat.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection