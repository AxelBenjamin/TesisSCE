<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nombre','Nombre(s):',['class' => 'control-label'])!!}
 	</div> 	
	<div class="col-lg-3">
		{!! Form::text('nombre',null,['class' => 'form-control']) !!}
	</div>	


	<div class="col-lg-1">
 		{!! Form::label('foto','Foto:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::file('foto', null) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('apa','Apellido Paterno:',['class' => 'control-label'])!!}
 	</div> 	
	<div class="col-lg-3">
		{!! Form::text('apa',null,['class' => 'form-control']) !!}
	</div>


	<div class="col-lg-3"> 
		{!! Form::label('ama','Apellido Materno:',['class' => 'control-label'])!!}
 	</div> 	

 	<div class="col-lg-3">
		{!! Form::text('ama',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nacimiento','Fecha de Nacimiento:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::date('nacimiento',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nacionalidad','Nacionalidad:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::text('nacionalidad',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('curp','CURP:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::text('curp',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('matricula','Matrícula:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::text('matricula',null,['class' => 'form-control']) !!}
	</div>


	<div class="col-lg-2">
 		{!! Form::label('contraseña','Contraseña:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::password('contraseña',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('colonia','Colonia:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::text('colonia',null,['class' => 'form-control']) !!}
	</div>


	<div class="col-lg-2">
 		{!! Form::label('calle','Calle:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-4">
		{!! Form::text('calle',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
<div class="col-lg-2">
 		{!! Form::label('cp','Código Postal:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-2">
		{!! Form::text('cp',null,['class' => 'form-control']) !!}
	</div>


	<div class="col-lg-1">
 		{!! Form::label('municipio','Municipio:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::text('municipio',null,['class' => 'form-control']) !!}
	</div>


	<div class="col-lg-1">
 		{!! Form::label('estado','Estado:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::text('estado',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-2">
 		{!! Form::label('telefono','Teléfono:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-3">
		{!! Form::text('telefono',null,['class' => 'form-control']) !!}
	</div>


	<div class="col-lg-2">
 		{!! Form::label('correo','Correo:',['class' => 'control-label'])!!}
 	</div>
 	
 	<div class="col-lg-5">
		{!! Form::text('correo',null,['class' => 'form-control']) !!}
	</div>
</div>

<div class="form-group">
	<div class="col-lg-3">
 		{!! Form::label('nombre','Selecciona un Grupo:',['class' => 'control-label'])!!}
 	</div>

	<div class="col-lg-2">
		{!! Form::select('grupos_id', $Grupos, null, array('class' => 'form-control')) !!}
	</div>
</div>