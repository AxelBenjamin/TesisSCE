{{ Form::hidden('tipo', 'ProgramaExtendido') }}

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

  <div class="col-lg-3">
    {!! Form::label('psetotalhrssemana','Horas por Semana:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! form::text('psetotalhrssemana', null, ['class' => 'form-control'])!!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('psehrsteoricas','Horas Teoricas:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! form::text('psehrsteoricas', null, ['class' => 'form-control'])!!}
  </div>

  <div class="col-lg-3">
    {!! Form::label('psehrspracticas','Horas Prácticas:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! form::text('psehrspracticas', null, ['class' => 'form-control'])!!}
  </div>
</div>

<div class="form-group">
  <div class="col-lg-3">
    {!! Form::label('plan_estudios_id','Seleccionar Plan de Estudios:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('plan_estudios_id', $PlanEstudios, null, array('class' => 'form-control')) !!}
  </div>

  <div class="col-lg-3">
    {!! Form::label('grupos_id','Seleccionar Grupo:',['class' => 'control-label'])!!}
  </div>
  <div class="col-lg-3">
    {!! Form::select('grupos_id', $Grupos, null, array('class' => 'form-control')) !!}
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