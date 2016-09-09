@extends('layouts.master')

@section('content2')

{!! Form::model($CicloEscolar, ['route' => ['ce.update', $CicloEscolar->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('CicloEscolares.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('ce.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection