oliz

@foreach($Materia->unidads as $unidads)
		@foreach($unidads->temas as $tema)
			@foreach($tema->reportes as $reporte)
				{{$reporte->calificacionFA}}
			@endforeach
		@endforeach
@endforeach