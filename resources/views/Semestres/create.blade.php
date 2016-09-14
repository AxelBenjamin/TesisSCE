@extends('layouts.master')

@section('content2')

{!! Form::open(['route' => 'sem.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	@include('Semestres.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('sem.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection