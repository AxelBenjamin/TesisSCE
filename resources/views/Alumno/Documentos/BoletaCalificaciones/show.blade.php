@extends('Alumno.layouts.master')

@section('contentAlumno')

<div align="center"><h4><strong>ACTA DE CALIFICACIONES</strong></h4></div></td>

<div class="table-responsive">
<br>
<table border="0" cellspacing="0">
    <tr>
        <th width="200">Matrícula: {{$Alumno->matricula}}</th>
        <th>Nombre del Alumno: {{$Alumno->apa}}
{{$Alumno->ama}}
{{$Alumno->nombre}}</th>
    </tr> 
</table>
<br>

<table border="1" cellspacing="0">

	
    <tr>
      <th width="150" height="60" scope="col"><div align="center">MATERIA </div></th>
      <th width="90" height="60" scope="col"><div align="center">1ER DEPARTAMENTAL</div></th>
      <th width="90" height="60" scope="col"><div align="center">2DO DEPARTAMENTAL</div></th>
      <th width="90" height="60" scope="col"><div align="center">PARCIAL</div></th>
      <th width="90" height="60" scope="col"><div align="center">PROMEDIO SEMESTRAL</div></th>
      <th width="90" height="60" scope="col"><div align="center">EXÁMEN FINAL A</div></th>
      <th width="90" height="60" scope="col"><div align="center">EXÁMEN FINAL B</div></th>
      <th width="90" height="60" scope="col"><div align="center">PROMEDIO FINAL</div></th>
    </tr>
	
	@foreach($Alumno->calificacions as $calificacion)
    <tr>
      <td height="40" scope="col"><div align="center">{{$calificacion->materias->nombre}}</div></td>
      <td><div align="center">{{$calificacion->calificacionD1}}</div></td>
      <td><div align="center">{{$calificacion->calificacionD2}}</div></td>
      <td><div align="center">{{$calificacion->calificacionP}}</div></td>
      <td><div align="center">{{$calificacion->calificacionsemestre}}</div></td>
      <td><div align="center">{{$calificacion->calificacionFA}}</div></td>
      <td><div align="center">{{$calificacion->calificacionFB}}</div></td>
      <td><div align="center"></div></td>
    </tr>
    @endforeach

    <tr>
      <td height="40" scope="col"><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>

    <tr>
      <td height="40" scope="col"><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>

    <tr>
      <td height="40" scope="col"><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>

</table>

{!! link_to('Boleta', $title='Volver', $attributes = ['class' => 'btn btn-default']) !!}

@endsection