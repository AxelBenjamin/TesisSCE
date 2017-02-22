@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

{!! Form::open(['route' => 'CalendarioExamenes.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

{{ Form::hidden('tipo', 'CartaAsig') }}

<div class="form-group">
  <div class="col-lg-4">
    {!! Form::label('maestros_id','Seleccionar Maestro:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('maestros_id', $Maestros, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-4">
    {!! Form::label('grupos_id','Seleccionar Grupo:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('grupos_id', $Grupos, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-4">
    {!! Form::label('semestres_id','Seleccionar Semestre:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('semestres_id', $Semestres, null, array('class' => 'form-control')) !!}
  </div>
</div>

  <div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('CalendarioExamenes.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection