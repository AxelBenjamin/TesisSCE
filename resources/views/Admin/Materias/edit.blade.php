@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGM')

{!! Form::model($Materia, ['route' => ['mat.update', $Materia->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('Admin.Materias.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('mat.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection