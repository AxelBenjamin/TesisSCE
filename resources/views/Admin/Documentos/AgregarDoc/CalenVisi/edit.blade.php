@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

{!! Form::model($Visita, ['route' => ['CalendarioVisi.update', $Visita->id], 'method'=>'PUT', 'class'=> 'form-horizontal', 'files' => true]) !!}


<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('ciclo_escolars_id','Seleccionar Ciclo Escolar:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('ciclo_escolars_id', $CiclosEscolares, null, array('class' => 'form-control')) !!}
  </div>

<div class="col-lg-3">
    {!! Form::label('nombre','Selecciona un Maestro:',['class' => 'control-label'])!!}
  </div>

  <div class="col-lg-3">
    {!! Form::select('maestros_id', $Maestros, null, array('class' => 'form-control')) !!}
  </div>
</div>


<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('cvhrsemana','Total hrs Semana:',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-3">
    {!! Form::text('cvhrsemana',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-3">
    {!! Form::label('cvhrgrupo','Horas por Grupo:',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-3">
    {!! Form::text('cvhrgrupo',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes1','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes1',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia1','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia1',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes2','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes2',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia2','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia2',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes3','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes3',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia3','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia3',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes4','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes4',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia4','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia4',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes5','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes5',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia5','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia5',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes6','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes6',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia6','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia6',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes7','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes7',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia7','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia7',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes8','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes8',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia8','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia8',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes9','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes9',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia9','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia9',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes10','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes10',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia10','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia10',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes11','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes11',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia11','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia11',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes12','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes12',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia12','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia12',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes13','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes13',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia13','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia13',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes14','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes14',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia14','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia14',null,['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! Form::label('cvmes15','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes15',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia15','Día:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia15',null,['class' => 'form-control']) !!}
  </div>

  <div class="col-lg-1">
    {!! Form::label('cvmes16','Mes:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvmes16',null,['class' => 'form-control']) !!}
  </div>
  <div class="col-lg-1">
    {!! Form::label('cvdia16','Día:',['clacvdia1ss' => 'control-label'])!!}
  </div>
  <div class="col-lg-2">
    {!! Form::text('cvdia16',null,['class' => 'form-control']) !!}
  </div>
</div>

  <div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('CalendarioVisi.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection