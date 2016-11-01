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
		{!! Form::label('fechaInicio', 'Fecha de Inicio:', ['class' => 'control-label']) !!}
	</div>
		
	<div class="col-lg-5">
		{!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
		{!! Form::label('fechaFinal', 'Fecha de Termino:', ['class' => 'control-label']) !!}
	</div>
		
	<div class="col-lg-5">
		{!! Form::date('fechaFinal', null, ['class' => 'form-control']) !!}
	</div>
</div>