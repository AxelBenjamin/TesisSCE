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
<div align="center">
  <p>&nbsp;</p>
  <img src="/src/imagenes/logo_americana_vertical.jpg" width="111" height="160" align="left" />  <img src="/src/imagenes/logo_computacion.png" alt="" width="111" height="160" align="right" />
  <table width="635" border="0">
    <tr>
      <td width="668"><h2 align="center">FACULTAD DE ARQUITECTURA E INGENIERÍA</h2></td>
    </tr>
  </table>
</div>
<div align="center">
  <table width="364" border="0">
    <tr>
      <td width="358"><div align="center">
        <h3><strong>INGENIERÍA EN COMPUTACIÓN</strong></h3>
      </div></td>
    </tr>
  </table>
  <table width="275" border="0">
    <tr>
      <td width="255"><div align="center"><strong>CALENDARIO DE EXAMENES</strong></div></td>
    </tr>
  </table>
  <table width="240" border="0">
    <tr>
      <td width="400"><div align="left"><strong>CICLO ESCOLAR </strong></div></td>
		<td width="312">
			{{ $CalendarioExamen->ciclo_escolars->nombre }}
		</td>
    </tr>
  </table>
  <table width="120" border="0">
    <tr>
      <td width="250"><div align="left"><strong>GRUPO</strong></div></td>
		<td>
			{{ $CalendarioExamen->grupos->nombre }}
		</td>

    </tr>
  </table>
  <table width="200" border="0">
    <tr>
      <td width="120"><div align="center"><strong>
      	{{ $CalendarioExamen->plan_estudios->nombre }}
      </strong></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <th width="358" height="60" scope="col">SEMESTRE {{ $CalendarioExamen->semestres->nombre }}</th>
      <th width="155" height="60" scope="col">1ER DEPARTAMENTAL</th>
      <th width="155" height="60" scope="col">2DO DEPARTAMENTAL</th>
      <th width="155" height="60" scope="col">EXÁMEN FINAL A</th>
      <th width="155" height="60" scope="col">EXÁMEN FINAL B</th>
    </tr>

    @foreach($CalendarioExamen->semestres->materias as $materia)
    <tr>
      <td height="40" align="center"> {{ $materia->nombre }}</td>
      <td align="center">{{ $materia->fechad1 }}</td>
      <td align="center">{{ $materia->fechad2 }}</td>
      <td align="center">{{ $materia->fechaA }}</td>
      <td align="center">{{ $materia->fechaB }}</td>
    </tr>
	@endforeach

    <tr>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
      <td height="40">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="5">LOS EXÁMENES PARCIALES Y DEPARTAMENTALES SERÁN APLICADOS A LA HORA DE CLASES, LOS FINALES A Y B DE 9:00 A 11:00 HORAS DEL DÍA, NO HABRA NINGÚN CAMBIO EN LOS HORARIOS Y HORAS DE EXÁMENES.</td>
    </tr>
  </table>
  <p>{!! link_to('CalendarioExamenes', $title='Volver', $attributes = ['class' => 'btn btn-default']) !!}</p>
</div>
<p align="center"></p>
</body>
</html>