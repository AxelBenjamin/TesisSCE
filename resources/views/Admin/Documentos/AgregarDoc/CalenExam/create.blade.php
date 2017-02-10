@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

{!! Form::open(['route' => 'CalendarioExamenes.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

{!! Form::select('ciclo_escolars_id', $CiclosEscolares, null, array()) !!}

{!! Form::select('planes_estudios_id', $PlanesEstudios, null, array()) !!}

{!! Form::select('grupos_id', $Grupos, null, array()) !!}

{!! Form::select('semestres_id', $Semestres, null, array()) !!}

  <div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('AcuerdoGrupo.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection