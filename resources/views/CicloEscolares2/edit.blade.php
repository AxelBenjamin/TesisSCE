{!! Form::model($CicloEscolar, ['route' => ['ce.update', $CicloEscolar->id], 'method'=>'PUT']) !!}

 	<div class="form-group">
 		<div class="col-lg-2">
 			{!! Form::label('nombre','Nombre:',['class' => 'control-label'])!!}
 		</div>
 		<div class="col-lg-5">
			{!! Form::text('nombre',null,['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			{!! Form::label('fechaInicio', 'Fecha de Inicio:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			{!! Form::label('fechaFinal', 'Fecha de Termino:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::date('fechaFinal', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div>
		<p></p>
		{!! Form::submit('Editar',['class' => 'btn btn-default']) !!}
	</div>
 
{!! Form::close() !!}


{!! Form::open(['route' => ['ce.destroy', $CicloEscolar->id], 'method'=>'DELETE']) !!}

 	
		{!! Form::submit('Eliminar',['class' => 'btn btn-default']) !!}
 
{!! Form::close() !!}