@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGU')

{!! Form::open(['route' => 'alu.store', 'method'=>'POST', 'class'=> 'form-horizontal', 'files' => true]) !!}

 	@include('Admin.Alumnos.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('alu.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection