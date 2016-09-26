@extends('layouts.master')

@section('content2')

{!! Form::open(['route' => 'mat.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	@include('Materias.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('mat.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection