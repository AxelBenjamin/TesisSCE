<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calendario de Examenes</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/botonesPanel.css')}}">

<style type="text/css">
body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>
</head>

<body>
  <img src="/src/imagenes/logo_americana_vertical.jpg" width="71" height="100" align="left" />  
  <img src="/src/imagenes/logo_computacion.png" alt="" width="71" height="100" align="right" />
  <table width="775" border="0">
    <tr>
      <td width="775"><h3 align="center">FACULTAD DE ARQUITECTURA E INGENIERÍA</h3></td>
    </tr>
    <tr>
      <td width="775"><div align="center"><strong>INGENIERÍA EN COMPUTACIÓN</strong></div></td>
    </tr>
    <tr>
      <td width="775"><div align="center"><strong>CALENDARIO DE EXAMENES</strong></div></td>
    </tr>
    <tr>
      <td width="775"><div align="center"><strong>CICLO ESCOLAR {{ $data->ciclo_escolars->nombre }}</strong></div></td>
    </tr>
    <tr>
      <td width="775"><div align="center"><strong>GRUPO {{ $data->grupos->nombre }}</strong></div></td>
    </tr>
    <tr>
      <td width="775"><div align="center"><strong>PLAN {{ $data->plan_estudios->nombre }}</strong></div></td>
    </tr><br>
  </table>
  <table width="775" border="1" cellspacing="0">
    <tr>
      <th width="200" scope="col">SEMESTRE {{ $data->semestres->nombre }}</th>
      <th width="120" scope="col">1ER DEPARTAMENTAL</th>
      <th width="120" scope="col">2DO DEPARTAMENTAL</th>
      <th width="120" scope="col">EXÁMEN FINAL A</th>
      <th width="120" scope="col">EXÁMEN FINAL B</th>
    </tr>

    @foreach($data->semestres->materias as $materia)
    <tr>
      <td height="25" align="center"> {{ $materia->nombre }}</td>
      <td align="center">{{ $materia->fechad1 }}</td>
      <td align="center">{{ $materia->fechad2 }}</td>
      <td align="center">{{ $materia->fechaA }}</td>
      <td align="center">{{ $materia->fechaB }}</td>
    </tr>
	@endforeach

    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5" align="justify">LOS EXÁMENES PARCIALES Y DEPARTAMENTALES SERÁN APLICADOS A LA HORA DE CLASES, LOS FINALES A Y B DE 9:00 A 11:00 HORAS DEL DÍA, NO HABRA NINGÚN CAMBIO EN LOS HORARIOS Y HORAS DE EXÁMENES.</td>
    </tr>
  </table>
</body>
</html>