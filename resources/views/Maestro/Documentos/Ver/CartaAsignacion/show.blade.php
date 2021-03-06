<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carta de Asignación</title>
<style type="text/css">
body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>
</head>

<body>
<div align="center">
  <img src="/src/imagenes/logo_americana_vertical.jpg" alt="" width="71" height="100" align="left" />
  <table width="545" border="0">
    <tr>
      <td><h3 align="center">FACULTAD DE ARQUITECTURA E INGENIERÍA</h3></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
    <table width="545" border="0">
      <tr>
        <td><div align="right">Acapulco, Gro; a 
        <?php
        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        echo $dias[date('w')].", ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
        ?>
        </div></td>
      </tr>
    </table>
  
</div>
<div align="center">
<p></p>
<div align="center">
  <table width="800" border="0">
    <tr>
      <td><strong>
      {{ $data->maestros->grado }}
      {{ $data->maestros->apa }}
      {{ $data->maestros->ama }}
      {{ $data->maestros->nombre }}</strong></td>
      </tr>
    <tr>
      <td>PROFESOR DE ASIGNATURA</td>
      </tr>
    <tr>
      <td>P R E S E N T E.</td>
      </tr>
  </table>
</div>
<br>
  <div align="center">
    <table width="545" border="0">
      <tr>
        <td><div align="justify">
        <p><strong>
          {{ $data->maestros->grado }}
          {{ $data->maestros->apa }}
          {{ $data->maestros->ama }}
          {{ $data->maestros->nombre }}</strong></p>
          Por acuerdo del <em><strong>Consejo Directivo</strong></em>, ha sido designado como Profesor de las Cátedras que a continuación se señalan:
        </div></td>
      </tr>
    </table>
  </div>
  <div align="center">
    <table width="545" border="0">

      @foreach($data->maestros->materias as $materia)
      <tr>
        <td>
        <blockquote><strong>{{ $materia->nombre }}</strong><br>
        {{ $materia->grupos->nombre }} IC<br>
        {{ $materia->dia1 }}  {{ $materia->dia1horario }} 
        {{ $materia->dia2 }}  {{ $materia->dia2horario }}
        {{ $materia->dia3 }}  {{ $materia->dia3horario }}<br>
        </td>
      </tr>
      @endforeach

    </table>
    <br>
  </div>
  <table width="545" border="0">
    <tr>
      <td><div align="justify">Lo anterior corresponde al semestre que inicia el 03 de Agosto y concluye el 28 de Noviembre en el año en curso.</div></td>
    </tr>
  </table>
  <div align="center">
    <table width="545" border="0">
      <tr>
        <td><div align="justify">El compromiso institucional que asume, conlleva aparejada la respondibilidad de alcanzar totalmente los objetivos educacionales del programa de estudios, impartir cuando menos el 90% del programa, asistir a las reuniones de trabajo que se convoquen, entregar calificaciones máximo dos días después de haber aplicado examen y participar en los exámenes departamentales, finales y extraordinarios que se programen.</div></td>
      </tr>
    </table>
    <table width="545" border="0">
      <tr>
        <td>Reciba las seguridades de más distinguida consideración.</td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <table width="545" border="0">
      <tr>
        <td><div align="center">Atentamente</div></td>
      </tr>
      <tr>
        <td><div align="center"><strong>&quot;Excelencia para el Desarrollo&quot;</strong></div></td>
      </tr>
      <tr>
        <td><p>&nbsp;</p></td>
      </tr>
      <tr>
        <td><div align="center"><strong>Arq. Miguel Ángel Sagaón Sandoval</strong></div></td>
      </tr>
      <tr>
        <td><div align="center">Director</div></td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>