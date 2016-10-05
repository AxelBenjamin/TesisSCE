@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGU')

{!! Form::open(['route' => 'mae.store', 'method'=>'POST', 'class'=> 'form-horizontal', 'files' => true]) !!}

 	@include('Maestros.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('mae.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection