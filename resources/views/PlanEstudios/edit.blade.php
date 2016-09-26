@extends('layouts.master')

@section('content2')

{!! Form::model($PlanEstudios, ['route' => ['plan.update', $PlanEstudios->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('PlanEstudios.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('plan.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection