@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGM')

{!! Form::model($Unidad, ['route' => ['uni.update', $Unidad->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('Unidades.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('uni.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection