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
 		{!! Form::label('nombre','Selecciona una Unidad:',['class' => 'control-label'])!!}
 	</div>

	<div class="col-lg-5">
		{!! Form::select('unidads_id', $Unidades, null, array('class' => 'form-control')) !!}
	</div>
</div>