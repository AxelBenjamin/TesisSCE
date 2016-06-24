<h1> HOLA MUNDO </h1>

{!! Form::open(['route' => 'CicloEscolares2.store', 'method'=>'POST', 'class'=> 'form-horizontal']) !!}

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
			{!! Form::label('fechaInicio', 'FechaInicio:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::text('fechaInicio', null, ['class' => 'form-control']) !!}
		</div>
	</div>

	<div>
		<div class="col-lg-2">
			{!! Form::label('fechaFinal', 'FechaFinal:', ['class' => 'control-label']) !!}
		</div>
		<div class="col-lg-5">
			{!! Form::text('fechaFinal', null, ['class' => 'form-control']) !!}
		</div>
	</div>
 
	<div>
		<p></p>
		{!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
	</div>
 
{!! Form::close() !!}