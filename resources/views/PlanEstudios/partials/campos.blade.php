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
		{!! Form::label('nombre', 'Nombre:', ['class' => 'control-label']) !!}
	</div>
		
	<div class="col-lg-5">
		{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
		{!! Form::label('archivo', 'Archivo:', ['class' => 'control-label']) !!}
	</div>
		
	<div class="col-lg-5">
		{!! Form::file('archivo', null, ['class' => 'form-control']) !!}
	</div>
</div>