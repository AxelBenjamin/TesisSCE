@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

{!! Form::open(['route' => 'Horario.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

{{ Form::hidden('tipo', 'Horario') }}

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('semestres_id','Seleccionar Semestre:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('semestres_id', $Semestres, null, array('class' => 'form-control')) !!}
  </div>

	<div class="col-lg-3">
 		{!! Form::label('archivoHorario','Seleccionar Archivo:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::file('archivoHorario', null) !!}
	</div>
</div>


  <div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('Horario.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection