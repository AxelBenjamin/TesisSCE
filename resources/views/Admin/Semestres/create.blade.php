@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGCE')

{!! Form::open(['route' => 'sem.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	@include('Admin.Semestres.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('sem.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection