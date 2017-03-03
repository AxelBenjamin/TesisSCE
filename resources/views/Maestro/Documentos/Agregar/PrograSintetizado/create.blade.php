@extends('Maestro.layouts.master')

@section('contentMaestro')

@include('Maestro.layouts.partials.menuGD')

{!! Form::open(['route' => 'PrograSintetizado.store', 'method'=>'POST', 'class'=> 'form-horizontal', 'files' => true]) !!}

{{ Form::hidden('tipo', 'ProgramaSintetizado') }}

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('fechaelaboracion','Fecha de Elaboración:',['class' => 'control-label'])!!}
 	</div> 	
	<div class="col-lg-3">
		{!! Form::date('fechaelaboracion', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
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
    {!! Form::label('ciclo_escolars_id','Seleccionar Ciclo Escolar:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('ciclo_escolars_id', $CicloEscolares, null, array('class' => 'form-control')) !!}
  </div>
 </div>

<div class="form-group">
 <div class="col-lg-3">
    {!! Form::label('maestros_id','Seleccionar Maestro:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('maestros_id', $Maestros, null, array('class' => 'form-control')) !!}
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
    {!! Form::label('psetotalhrssemana','Horas por Semana:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! form::text('psetotalhrssemana', null, ['class' => 'form-control'])!!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('psenumclasessemana','Clases por Semana:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! form::text('psenumclasessemana', null, ['class' => 'form-control'])!!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-4">
    {!! form::label(null, 'Aspectos a Evaluar',['class' => 'control-label'])!!}
  </div> 
</div> 

<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagdepartamentales', '1)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-5">
    {!! form::text('pseagdepartamentales', null, ['class' => 'form-control'])!!}
  </div>
</div>
  
<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagpracticas', '2)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-5">
    {!! form::text('pseagpracticas', null, ['class' => 'form-control'])!!}
  </div>
</div>  

<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagtareaspart', '3)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-5">
    {!! form::text('pseagtareaspart', null, ['class' => 'form-control'])!!}
  </div>
</div>  

<div class="form-group">
  <div class="col-lg-4">
    {!! form::label(null, 'Requisitos para exentar',['class' => 'control-label'])!!}
  </div> 
</div> 

<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagreqexentarA', 'a)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-5">
    {!! form::text('pseagreqexentarA', null, ['class' => 'form-control'])!!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagreqexentarB', 'b)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-5">
    {!! form::text('pseagreqexentarB', null, ['class' => 'form-control'])!!}
  </div>
</div>
  
<div class="form-group">
  <div class="col-lg-1">
    {!! form::label('pseagreqexentarC', 'c)',['class' => 'control-label'])!!}
  </div>
  
  <div class="col-lg-5">
    {!! form::text('pseagreqexentarC', null, ['class' => 'form-control'])!!}
  </div>
</div>>  

<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
		{!! link_to_route('PrograSintetizado.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
	</div>
 
{!! Form::close() !!}

@endsection