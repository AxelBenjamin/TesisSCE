@extends('Maestro.layouts.master')

@section('contentMaestro')

@include('Maestro.layouts.partials.menuGD')

{!! Form::open(['route' => 'AcuerdoGrupo.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

{{ Form::hidden('tipo', 'Acuerdo') }}

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('ciclo_escolars_id','Seleccionar Ciclo Escolar:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('ciclo_escolars_id', $CiclosEscolares, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('materias_id','Seleccionar Materia:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('materias_id', $Materias, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('grupos_id','Seleccionar Grupo:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('grupos_id', $Grupos, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('grupos_id','Fecha:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::date('fechaelaboracion', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
  </div>
</div>



<div class="form-group">
  <div class="col-lg-3">
    {!! form::label('agtrabajopracfin', 'Trabajo y/o Practica Final:',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-4">
    {!! form::textarea('agtrabajopracfin', null, ['class' => 'form-control'])!!}
  </div>
</div>
  

<div class="form-group">
  <div class="col-lg-4">
    {!! form::label(null, 'Consideraciones para exentar',['class' => 'control-label'])!!}
  </div> 
</div> 

<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagreqexentarA', '1)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-6">
    {!! form::text('pseagreqexentarA', null, ['class' => 'form-control'])!!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagreqexentarB', '2)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-6">
    {!! form::text('pseagreqexentarB', null, ['class' => 'form-control'])!!}
  </div>
</div>
  
<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagreqexentarC', '3)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-6">
    {!! form::text('pseagreqexentarC', null, ['class' => 'form-control'])!!}
  </div>
</div>  


<div class="form-group">
  <div class="col-lg-4">
    {!! form::label(null, 'Evaluación Departamental',['class' => 'control-label'])!!}
  </div> 
</div> 

<div class="form-group">
  <div class="col-lg-3">
    {!! form::label('pseagdepartamentales', 'Departamentales:',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-2">
    {!! form::text('pseagdepartamentales', null, ['class' => 'form-control'])!!}
  </div>
</div>
  
<div class="form-group">
  <div class="col-lg-3">
    {!! form::label('pseagpracticas', 'Practicas:',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-2">
    {!! form::text('pseagpracticas', null, ['class' => 'form-control'])!!}
  </div>
</div>  

<div class="form-group">
  <div class="col-lg-3">
    {!! form::label('pseagtareaspart', 'Tareas/Participaciones:',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-2">
    {!! form::text('pseagtareaspart', null, ['class' => 'form-control'])!!}
  </div>
</div>  

  <div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('AcuerdoGrupo.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection