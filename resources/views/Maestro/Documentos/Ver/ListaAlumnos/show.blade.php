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
      <td><strong align='center'>CICLO ESCOLAR {{$data->ciclo_escolars->nombre}}</strong></td>
    </tr>
    <tr>
      <td><strong align="center">GRUPO {{$data->grupos->nombre}}  IC</strong></td>
    </tr>
    <tr>&nbsp;</tr>
  </table>

<table width="545" border="1" cellspacing="0">
    <tr> 
        <td width="50"><strong align="center">Matrícula</strong></td>     
        <td width="200"><div align="center"><strong>Nombre del Alumno</strong></div></td>
    </tr>
    
    @foreach ($data->grupos->alumnos as $alumno)
    <tr>
        <td>{{$alumno->matricula}}</td>
        <td><div align="left">
            {{$alumno->apa}}
            {{$alumno->ama}}
            {{$alumno->nombre}}
        </div></td>
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
</div>
</body>
</html>