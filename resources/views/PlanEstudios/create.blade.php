@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGCE')

{!! Form::open(['route' => 'plan.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	@include('PlanEstudios.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('plan.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection