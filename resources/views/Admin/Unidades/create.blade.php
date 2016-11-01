@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGM')

{!! Form::open(['route' => 'uni.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	@include('Admin.Unidades.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('uni.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection