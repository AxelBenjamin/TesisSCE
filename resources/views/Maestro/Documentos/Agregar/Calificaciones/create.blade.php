@extends('Maestro.layouts.master')

@section('contentMaestro')

{!! Form::open(['route' => 'Calificaciones.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

{{ Form::hidden('tipo', 'Calificacion') }}

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
    {!! Form::label('maestros_id','Seleccionar Maestro:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('maestros_id', $Maestros, null, array('class' => 'form-control')) !!}
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
    {!! Form::label('grupos_id','Seleccionar Grupo:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('grupos_id', $Grupos, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('semestres_id','Seleccionar Semestre:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('semestres_id', $Semestres, null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('alumnos_id','Seleccionar Alumno:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('alumnos_id', $Alumnos, null, array('class' => 'form-control')) !!}
  </div>
</div>


    {!! Form::label('calificacionfaltaD1','1er. Departamental',['class' => 'control-label'])!!} <br>
<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('calificacionfaltaD1','Agregar Faltas:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionfaltaD1', null, array('class' => 'form-control')) !!}
  </div>

  <div class="col-lg-3">
    {!! Form::label('calificacionD1','Agregar Calificacion:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionD1', null, array('class' => 'form-control')) !!}
  </div>
</div>

{!! Form::label(null,'2do. Departamental',['class' => 'control-label'])!!} <br>
<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('calificacionFaltaD2','Agregar Faltas:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionFaltaD2', null, array('class' => 'form-control')) !!}
  </div>

  <div class="col-lg-3">
    {!! Form::label('calificacionD2','Agregar Calificacion:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionD2', null, array('class' => 'form-control')) !!}
  </div>
</div>

{!! Form::label('calificacionfaltaD1','Parcial',['class' => 'control-label'])!!} <br>
<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('calificacionfaltaP','Agregar Faltas:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionfaltaP', null, array('class' => 'form-control')) !!}
  </div>

  <div class="col-lg-3">
    {!! Form::label('calificacionP','Agregar Calificacion:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionP', null, array('class' => 'form-control')) !!}
  </div>
</div>

{!! Form::label('calificacionfaltaD1','Promedio Semestral',['class' => 'control-label'])!!} <br>
<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('calificacionsemestre','Agregar Promedio Semestral:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionsemestre', null, array('class' => 'form-control')) !!}
  </div>
</div>

{!! Form::label('calificacionfaltaD1','Final',['class' => 'control-label'])!!} <br>
<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('calificacionFA','Agregar Calificacion Final A:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionFA', null, array('class' => 'form-control')) !!}
  </div>

  <div class="col-lg-3">
    {!! Form::label('calificacionFB','Agregar Calificacion Final B:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificacionFB', null, array('class' => 'form-control')) !!}
  </div>
</div>

<div class="form-group">
<p>Calificación Total</p>
  <div class="col-lg-3">
    {!! Form::label('calificaciontotal','Agregar Calificacion Final:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::text('calificaciontotal', null, array('class' => 'form-control')) !!}
  </div>
</div>


  <div>
    <p></p>
  
  {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('Calificaciones.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection