@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGCE')

{!! Form::open(['route' => 'gru.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	@include('Admin.Grupos.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('gru.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection