<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo Escolar</title>
</head>
<body>

<table class="table">
	<thead>
		<th>Nombre</th>
		<th>Fecha de Inicio</th>
		<th>Fecha de Termino</th>
	</thead>
@foreach($CiclosEscolares as $CicloEscolar) 
	<tbody>
		<th> {{$CicloEscolar->nombre}} </th>
		<th> {{$CicloEscolar->fechaInicio}} </th>
		<th> {{$CicloEscolar->fechaFinal}} </th>
		
		
		</tbody>
	@endforeach
	
</body>
</html>