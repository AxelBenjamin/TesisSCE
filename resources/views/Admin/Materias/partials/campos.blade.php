<div class="form-group">
 	<div class="col-lg-3">
 		{!! Form::label('clave','Clave:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('clave',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('nombre','Nombre:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('nombre',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('fechad1','Fecha Departamental 1:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::date('fechad1',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('fechad2','Fecha Departamental 2:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::date('fechad2',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('fechaA','Fecha Final A:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::date('fechaA',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('fechaB','Fecha Final B:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::date('fechaB',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('dia1','Dia 1:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('dia1',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('dia1horario','Horario Dia 1:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('dia1horario',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('dia2','Dia 2:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('dia2',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('dia2horario','Horario Dia 2:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('dia2horario',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('dia3','Dia 3:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('dia3',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('dia3horario','Horario Dia 3:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('dia3horario',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nombre','Selecciona un Semestre:',['class' => 'control-label'])!!}
 	</div>

	<div class="col-lg-5">
		{!! Form::select('semestres_id', $Semestres, null, array('class' => 'form-control')) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nombre','Selecciona un Maestro:',['class' => 'control-label'])!!}
 	</div>

	<div class="col-lg-5">
		{!! Form::select('maestros_id', $Maestros, null, array('class' => 'form-control')) !!}
	</div>
</div>