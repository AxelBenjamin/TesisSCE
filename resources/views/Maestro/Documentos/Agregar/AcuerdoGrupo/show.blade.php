<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acuerdo de Grupo</title>

<link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/general.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/botonesPanel.css')}}">

<style type="text/css">
body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	text-align: center;
}
</style>
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <img src="/src/imagenes/logo_americana_vertical.jpg" class="img-responsive" alt="Responsive image" width="111" height="160" align="left" /><img src="/src/imagenes/logo_computacion.png" class="img-responsive" alt="Responsive image" alt="" width="111" height="160" align="right" />
  <table width="635" border="0">
    <tr>
      <td width="668"><h3 align="center">FACULTAD DE ARQUITECTURA E INGENIERÍA</h3></td>
    </tr>
  </table>
  <table width="200" border="0">
    <tr>
      <td><strong>ACUERDO DE GRUPO</strong></td>
    </tr>
  </table>
</div>
<div align="center">
  <table width="364" border="0">
    <tr>
      <td width="358"><div align="center">
        <h4><strong>INGENIERÍA EN COMPUTACIÓN</strong></h4>
      </div></td>
    </tr>
  </table>
  <table width="280" border="0">
    <tr>
      <td><div align="left"><strong>CICLO ESCOLAR </strong></div>
      </td>
      <td>
        {{ $Acuerdo->ciclo_escolars->nombre}}
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="896" border="0">
    <tr>
      <td width="350"><div align="left"><strong>MATERIA: {{ $Acuerdo->materias->nombre }} </strong></div>
      </td>

      <td width="191"><div align="left"><strong>GRUPO: {{ $Acuerdo->grupos->nombre }} </strong></div>
      </td>

      <td width="191"><div align="left"><strong>FECHA:  </strong>
      <?php
      echo date('d/m/Y');
      ?>
      </div>      
      </td>
    </tr>
  </table>
  <table width="795" border="1" cellspacing="0">
    <tr>
      <td width="492"><div align="center">LOS ALUMNOS ABAJO FIRMANTES AFIRMAN HABER RECIBIDO EL PROGRAMA SINTETIZADO.</div></td>
    </tr>
  </table>
  <table width="794" border="1" align="center" cellspacing="0">
    <tr>
      <td width="83"><div align="center"><strong>Número</strong></div></td>
      <td width="539"><div align="center"><strong>Nombre del Alumno</strong></div></td>
      <td width="150"><div align="center"><strong>Firma</strong></div></td>
    </tr>

    @foreach($Acuerdo->grupos->alumnos as $alumno)      
      <tr>
        <td><div align="center">{{ $alumno->id }}</div></td>
        <td><div align="left">&nbsp;
        {{ $alumno->apa }}
        {{ $alumno->ama }}
        {{ $alumno->nombre }}</div></td>
        <td>&nbsp;</td>
      </tr>
    @endforeach
  
    <tr>
      <td><div align="center">3</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">4</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">5</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">6</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">7</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">8</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">9</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">10</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">11</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">12</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">13</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">14</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">15</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">16</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">17</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">18</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">19</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="794" border="1" cellspacing="0">
    <tr>
      <th width="788" scope="col">TRABAJO Y/O PRACTICA FINAL</th>
    </tr>
    <tr>
      <td>{{ $Acuerdo->agtrabajopracfin }}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="794" border="1" cellspacing="0">
    <tr>
      <th scope="col">CONSIDERACIONES ESPECIALES</th>
    </tr>
    <tr>
      <td>{{ $Acuerdo->pseagreqexentarA}}</td>
    </tr>
    <tr>
      <td>{{ $Acuerdo->pseagreqexentarB}}</td>
    </tr>
    <tr>
      <td>{{ $Acuerdo->pseagreqexentarC}}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="794" border="1" cellspacing="0">
    <tr>
      <th colspan="2" scope="col">EVALUACIÓN DEPARTAMENTAL</th>
    </tr>
    <tr>
      <td colspan="2">Departamentales: {{ $Acuerdo->pseagdepartamentales }}</td>
    </tr>
    <tr>
      <td colspan="2">Practicas: {{ $Acuerdo->pseagpracticas }}</td>
    </tr>
    <tr>
      <td colspan="2">Tareas/Participación: {{ $Acuerdo->pseagtareaspart }}</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="628">TOTAL</td>
      <td width="150">100 %</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="794" border="0">
    <tr>
      <td width="260"> <div align="center">FIRMA DEL PROFESOR</div></td>
      <td width="260">&nbsp;</td>
      <td width="260"><div align="center">FIRMA DEL JEFE DE GRUPO</div></td>
    </tr>
    <tr>
      <td><p align="center">&nbsp;</p>
      <p align="center">___________________________</p></td>
      <td>&nbsp;</td>
      <td><p align="center">&nbsp;</p>
      <p align="center">___________________________</p></td>
    </tr>
  </table>
  <table width="794" border="0">
    <tr>
      <td width="227"><div align="left"></div></td>
      <td width="293">&nbsp;</td>
      <td width="260"><p align="center">Vo. Bo.</p>
      <p align="center">DIRECTOR TECNICO</p></td>
    </tr>
    <tr>
      <td><div align="left"> 
        <ul>
          <li>ORIGINAL ALUMNO  </li>
          <li>1ER COPIA PROFESOR </li>
          <li>2DA COPIA FACULTAD</li>
        </ul>
<<<<<<< HEAD
        {!! link_to('AcuerdoGrupo', $title='Volver', $attributes = ['class' => 'btn btn-default']) !!}
=======
        {!! link_to('AcuerdoGrupo', $title='Cancelar', $attributes = ['class' => 'btn btn-default']) !!}
>>>>>>> master
      </div></td>
      <td>&nbsp;</td>
      <td><p align="center">&nbsp;</p>
      <p align="center">___________________________</p>
<<<<<<< HEAD
=======
      <div align="right">{!! link_to('AgregarDocumentosM/Calificaciones', $title='Guardar', $attributes = ['class' => 'btn btn-default']) !!} </div>
>>>>>>> master
      </td>
    </tr>
  </table>
  <hr />
</div>
</body>
</html>