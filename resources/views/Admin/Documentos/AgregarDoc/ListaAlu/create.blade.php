@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

{!! Form::open(['route' => 'ListaAlumnos.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

{{ Form::hidden('tipo', 'ListaAlu') }}

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
    {!! Form::label('ciclo_escolars_id','Seleccionar Ciclo Escolar:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('ciclo_escolars_id', $CicloEscolars, null, array('class' => 'form-control')) !!}
  </div>
</div>

  <div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('ListaAlumnos.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection