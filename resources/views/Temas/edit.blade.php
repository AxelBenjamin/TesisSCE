@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGM')

{!! Form::model($Tema, ['route' => ['tem.update', $Tema->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('Temas.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('tem.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection