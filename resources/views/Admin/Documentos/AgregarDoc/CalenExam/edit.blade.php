@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

{!! Form::model($CalendarioExamen, ['route' => ['CalendarioExamenes.update', $CalendarioExamen->id], 'method'=>'PUT', 'class'=> 'form-horizontal', 'files' => true]) !!}

{{ Form::hidden('tipo', 'Calendario') }}

<div class="form-group">
  <div class="col-lg-4">
    {!! Form::label('ciclo_escolars_id','Seleccionar Ciclo Escolar:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('ciclo_escolars_id', $CiclosEscolares, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-4">
    {!! Form::label('plan_estudios_id','Seleccionar Plan de Estudios:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('plan_estudios_id', $PlanesEstudios, null, array('class' => 'form-control')) !!}
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