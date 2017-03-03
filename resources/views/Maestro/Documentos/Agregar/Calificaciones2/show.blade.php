<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calificaciones y faltas</title>
<style type="text/css">
body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <table width="635" border="0">
    <tr>
      <td width="668"><h2 align="center">UNIVERSIDAD AMERICANA DE ACAPULCO</h2></td>
    </tr>
  </table>
</div>
<div align="center">
  <table width="838" border="0">
    <tr>
      <td width="448"><div align="center">
        <h2><strong>FORMATO DE ACTAS ECÓNOMICAS DE EXÁMENES ORDINARIOS</strong></h2>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1000">

    <tr>
      <td width="170"><strong>CARRERA:</strong></td>
      <td width="300">INGENIERÍA EN COMPUTACIÓN</td>
      <td width="145"><strong>CLAVE:</strong></td>
      <td width="90">16</td>
      <td width="175"><strong>GRUPO:</strong></td>
      <td width="92">{{$Materia->grupos->nombre}} IC</td>
    </tr>

    <tr>
      <td><strong>ASIGNATURA:</strong></td>
      <td>{{$Materia->nombre}}</td>
      <td><strong>CLAVE:</strong></td>
      <td>{{$Materia->clave}}</td>
      <td><strong>SEMESTRE:</strong></td>
      <td>{{$Materia->semestres->nombre}}</td>
    </tr>
    <tr>
      <td><strong>PROFESOR:</strong></td>
      <td>{{$Materia->maestros->apa}}
      {{$Materia->maestros->ama}}
      {{$Materia->maestros->nombre}}</td>
      <td><strong>No. EXPEDIENTE:</strong></td>
      <td>&nbsp;</td>
      <td><strong>FECHA DE INICIO:</strong></td>
      <td>{{$Materia->semestres->ciclo_escolars->fechaInicio}}</td>
    </tr>
    <tr>
      <td><strong>TOTALES DE CLASE:</strong></td>
      <td> HRS.</td>
      <td><strong>CICLO ESCOLAR:</strong></td>
      <td>{{$Materia->semestres->ciclo_escolars->nombre}}</td>
      <td><strong>FECHA DE TERMINO:</strong></td>
      <td>{{$Materia->semestres->ciclo_escolars->fechaFinal}}</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <div align="justify"></div>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td colspan="3">&nbsp;</td>
      <td colspan="2"><div align="center"><strong>1er. Dep.</strong></div></td>
      <td colspan="2"><div align="center"><strong>2do. Dep.</strong></div></td>
      <td colspan="2"><div align="center"><strong>Parcial</strong></div></td>
      <td colspan="2"><div align="center"><strong>Promedio Semestral</strong></div></td>
      <td colspan="3"><div align="center"><strong>Calificación Ordinaria</strong></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>No.</strong></div></td>
      <td><div align="center"><strong>Matrícula</strong></div></td>
      <td><div align="center"><strong>Nombre del Alumno</strong></div></td>
      <td><div align="center"><strong>Faltas</strong></div></td>
      <td><div align="center"><strong>Calif.</strong></div></td>
      <td><div align="center"><strong>Faltas</strong></div></td>
      <td><div align="center"><strong>Calif.</strong></div></td>
      <td><div align="center"><strong>Faltas</strong></div></td>
      <td><div align="center"><strong>Calif.</strong></div></td>
      <td><div align="center"><strong>Faltas</strong></div></td>
      <td><div align="center"><strong>Calif.</strong></div></td>
      <td><div align="center"><strong>Calif. A</strong></div></td>
      <td><div align="center"><strong>Calif. B</strong></div></td>
      <td><div align="center"><strong>Final</strong></div></td>
    </tr>

    @foreach($Materia->calificacions as $calificacion)
    <tr>
      <td><div align="center">1</div></td>
      <td><div align="center">
      {{$calificacion->alumnos->matricula}}</div></td>
      <td>{{$calificacion->alumnos->apa}}
      {{$calificacion->alumnos->ama}}
      {{$calificacion->alumnos->nombre}}</td>
      <td><div align="center">
      {{$calificacion->calificacionfaltaD1}}</div></td>
      <td><div align="center">{{$calificacion->calificacionD1}}</div></td>
      <td><div align="center">{{$calificacion->calificacionFaltaD2}}</div></td>
      <td><div align="center">{{$calificacion->calificacionD2}}</div></td>
      <td><div align="center">{{$calificacion->calificacionfaltaP}}</div></td>
      <td><div align="center">{{$calificacion->calificacionP}}</div></td>
      <td><div align="center">{{$calificacion->calificacionfaltaD1 + $calificacion->calificacionFaltaD2 + $calificacion->calificacionfaltaP}}</div></td>
      <td><div align="center">{{$calificacion->calificacionsemestre}}</div></td>
      <td><div align="center">{{$calificacion->calificacionFA}}</div></td>
      <td><div align="center">{{$calificacion->calificacionFB}}</div></td>
      <td><div align="center">{{$calificacion->calificaciontotal}}</div></td>
    </tr>
    @endforeach

    <tr>
      <td><div align="center">2</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">3</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">4</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">5</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">6</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">7</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">8</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">9</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">10</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">11</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">12</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">13</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">14</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">15</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">16</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">17</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">18</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">19</div></td>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p></p>
</div>
</body>
</html>