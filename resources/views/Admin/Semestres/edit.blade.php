@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGCE')

{!! Form::model($Semestre, ['route' => ['sem.update', $Semestre->id], 'method'=>'PUT', 'class'=> 'form-horizontal']) !!}

 	@include('Admin.Semestres.partials.campos')

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('sem.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection