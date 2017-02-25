@foreach ($Materia->unidads as $unidad)
  @foreach($unidad->temas as $tema)
    @foreach ($tema->reportes as $reporte)
      {{$reporte->calificacionD1}}
    @endforeach
  @endforeach
@endforeach