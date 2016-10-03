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
 		{!! Form::label('hrsteoricas','Número de horas teoricas:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('hrsteoricas',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('hrspracticas','Número de horas practicas:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('hrspracticas',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('clasesteoricas','Clases teoricas:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('clasesteoricas',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('clasespracticas','Clases practicas:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('clasespracticas',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('bibliografia','Bibliografia:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('bibliografia',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('aprendizaje','Aprendizaje:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('aprendizaje',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('recursosdidacticos','Recursos Didacticos:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('recursosdidacticos',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('propositos','Propositos:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('propositos',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-3">
 		{!! Form::label('sistemaevaluacion','Sistema Evaluación:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('sistemaevaluacion',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nombre','Selecciona una Materia:',['class' => 'control-label'])!!}
 	</div>

	<div class="col-lg-5">
		{!! Form::select('materias_id', $Materias, null, array('class' => 'form-control')) !!}
	</div>
</div>