<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Acuerdo de Grupo</title>



<style type="text/css">
body,td,th {
	font-family: "Arial", "Arial", Arial, serif;
	text-align: center;
}
</style>
</head>

<body>
<div align="center">
  <img src="/src/imagenes/logo_americana_vertical.jpg" width="71" height="100" align="left" />
  <img src="/src/imagenes/logo_computacion.png" alt="" width="71" height="100" align="right" />
  <table width="545" border="0">
    <tr>
      <td><strong align="center">FACULTAD DE ARQUITECTURA E INGENIERÍA</strong></td>
    </tr>
    <tr>
      <td><strong align='center'>INGENIERÍA EN COMPUTACIÓN</strong></td>
    </tr>
    <tr>
      <td><strong align='center'>ACUERDO DE GRUPO</strong></td>
    </tr>
    <tr>
      <td><strong align="center">CICLO ESCOLAR {{ $data->ciclo_escolars->nombre}}</strong>
      </td>
    </tr>
  </table>

  <table width="545" border="0">
    <tr>
      <td width="180"><div align="left"><strong>MATERIA: {{ $data->materias->nombre }} </strong></div>
      </td>

      <td width="180"><div align="center"><strong>GRUPO: {{ $data->grupos->nombre }} </strong></div>
      </td>

      <td width="180"><div align="right"><strong>FECHA:  {{ $data->fechaelaboracion }}
      
      </strong>
      </div>      
      </td>
    </tr>
  </table>

  <table width="545" border="1" cellspacing="0">
    <tr>
      <td><div align="center">LOS ALUMNOS ABAJO FIRMANTES AFIRMAN HABER RECIBIDO EL PROGRAMA SINTETIZADO.</div></td>
    </tr>
  </table>

  <table width="543" border="1" align="center" cellspacing="0">
    <tr>
      
      <td width="200"><div align="center"><strong>Nombre del Alumno</strong></div></td>
      <td width="50"><div align="center"><strong>Firma</strong></div></td>
    </tr>

    @foreach($data->grupos->alumnos as $alumno)      
      <tr>
        
        <td><div align="left">
        {{ $alumno->apa }}
        {{ $alumno->ama }}
        {{ $alumno->nombre }}</div></td>
        <td>&nbsp;</td>
      </tr>
    @endforeach
  
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr>
  </table>

  <table width="545" border="1" cellspacing="0">
    <tr>
      <th scope="col">TRABAJO Y/O PRACTICA FINAL</th>
    </tr>
    <tr>
      <td>{{ $data->agtrabajopracfin }}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>

    <tr>
      <th scope="col">CONSIDERACIONES ESPECIALES</th>
    </tr>
    <tr>
      <td>{{ $data->pseagreqexentarA}}</td>
    </tr>
    <tr>
      <td>{{ $data->pseagreqexentarB}}</td>
    </tr>
    <tr>
      <td>{{ $data->pseagreqexentarC}}</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>

  <table width="545" border="1" cellspacing="0">
    <tr>
      <th colspan="2" scope="col">EVALUACIÓN DEPARTAMENTAL</th>
    </tr>
    <tr>
      <td width="385"><div align="left">Exámenes Departamentales </div></td>
      <td width="150"> {{ $data->pseagdepartamentales }}</td>
    </tr>
    <tr>
      <td width="385"><div align="left">Practicas </div></td>
      <td width="150"> {{ $data->pseagpracticas }}</td>
    </tr>
    <tr>
      <td width="385"><div align="left">Tareas/Participación </div></td>
      <td width="150"> {{ $data->pseagtareaspart }}</td>
    </tr> 
    <tr>
      <td width="385">&nbsp;</td>
      <td width="150"></td>
    </tr>
    <tr>
      <td width="385">TOTAL</td>
      <td width="150">100 %</td>
    </tr>
  </table>
  <p>&nbsp;</p>

  <table width="545" border="0">
    <tr>
      <td width="180"> <div align="center">FIRMA DEL PROFESOR</div></td>
      <td width="180">&nbsp;</td>
      <td width="180"><div align="center">FIRMA DEL JEFE DE GRUPO</div></td>
    </tr>
    <tr>
      <td><p align="center">&nbsp;</p>
      <p align="center">___________________________</p></td>
      <td>&nbsp;</td>
      <td><p align="center">&nbsp;</p>
      <p align="center">___________________________</p></td>
    </tr>
  </table>

  <table width="545" border="0">
    <tr>
      <td width="180"><div align="left"></div></td>
      <td width="180">&nbsp;</td>
      <td width="180"><p align="center">Vo. Bo.</p>
      <p align="center">DIRECTOR TECNICO</p></td>
    </tr>
    <tr>
      <td><div align="left"> 
        <ul>
          <li>ORIGINAL ALUMNO  </li>
          <li>1ER COPIA PROFESOR </li>
          <li>2DA COPIA FACULTAD</li>
        </ul>

      </div></td>
      <td>&nbsp;</td>
      <td><p align="center">&nbsp;</p>
      <p align="center">___________________________</p>

      </td>
    </tr>
  </table>
</div>
</body>
</html>