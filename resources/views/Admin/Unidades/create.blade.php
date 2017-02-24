@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGM')

{!! Form::open(['route' => 'uni.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

 	<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('nombre','Nombre:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('nombre',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nombre','Selecciona una Materia:',['class' => 'control-label'])!!}
 	</div>

	<div class="col-lg-5">
		{!! Form::select('materias_id', $Materias, null, array('class' => 'form-control')) !!}
	</div>
</div>
 	
	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('uni.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection