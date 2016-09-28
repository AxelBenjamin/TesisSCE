@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGCE')

{!! Form::model($Grupo, ['route' => ['gru.update', $Grupo->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('Grupos.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('gru.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection