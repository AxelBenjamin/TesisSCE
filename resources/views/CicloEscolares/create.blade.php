@extends('layouts.master')

@section('content2')

{!! Form::open(['route' => 'ce.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	@include('CicloEscolares.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('ce.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection