<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calendario de Visitantes</title>
<style type="text/css">
body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>
</head>

<body>
<div align="center">
  <div align="center">
    <!--<p>&nbsp;</p>-->
    <!--<img src="/src/imagenes/logo_americana_vertical.jpg" class="img-responsive" alt="" width="111" height="160" align="left" /><img src="/src/imagenes/logo_computacion.png" class="img-responsive" alt="" width="111" height="160" align="right" />-->
    <table width="775" border="0">
      <tr>
        <td width="668"><h3 align="center">FACULTAD DE ARQUITECTURA E INGENIERÍA</h3></td>
      </tr>
    </table>
  </div>
  <div align="center">
    <table width="775" border="0">
      <tr>
        <td width="358"><div align="center">
          <h4><strong>INGENIERÍA EN COMPUTACIÓN</strong></h4>
        </div></td>
      </tr>
    </table>
    <table width="775" border="0">
      <tr>
        <td width="255" nowrap="nowrap"><div align="center"><strong>CALENDARIZACIÓN DE PROFESORES VISITANTES</strong></div></td>
      </tr>
    </table>
    <table width="775" border="0">
      <tr>
        <td width="312"><div align="left"><strong>CICLO ESCOLAR {{$data->ciclo_escolars->nombre}}</strong></div></td>
      </tr>
    </table>
    <!--<p>&nbsp;</p>
    <p></p>-->
  </div>
</div>
<div align="center">
  <table width="775" border="0">
    <tr>
      <td nowrap="nowrap"><strong>PROFESOR: {{$data->maestros->grado}}
      {{$data->maestros->apa}}
		{{$data->maestros->ama}}
		{{$data->maestros->nombre}}</strong></td>
    </tr>
    <tr>
      <td width="900" nowrap="nowrap"><strong>MATERIAS: 
      	@foreach($data->maestros->materias as $materia)
			{{$materia->nombre}} -
		@endforeach</strong></td>
    </tr>
  </table>
  <table width="775" border="0">
    <tr>
      <td width="450" nowrap="nowrap"><strong>TOTAL DE HORAS A LA SEMANA: {{$data->cvhrsemana}}</strong></td>
      <td width="450" nowrap="nowrap"><strong>HORAS POR GRUPO: {{$data->cvhrgrupo}}</strong></td>
    </tr>
  </table>
  <table width="775" border="0">
    <tr>
      <td width="900" nowrap="nowrap"><strong>GRUPOS: 
      @foreach($data->maestros->materias as $materia)
			{{$materia->grupos->nombre}} -
	@endforeach</strong></td></strong></td>
    </tr>
  </table>
<!--<p>&nbsp;</p>-->
<table width="775" border="1" cellspacing="0">
  <tr>
    <td width="125" height="75"><div align="center">{{$data->cvmes1}}
    </div>
      <p align="center">{{$data->cvdia1}}</p>
      <p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes2}}</div>
    	<p align="center">{{$data->cvdia2}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes3}}</div>
    	<p align="center">{{$data->cvdia3}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes4}}</div>
    	<p align="center">{{$data->cvdia4}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes5}}</div>
    	<p align="center">{{$data->cvdia5}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes6}}</div>
    	<p align="center">{{$data->cvdia6}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    </tr>
  <tr>
    <td width="125" height="80"><div align="center">{{$data->cvmes7}}</div>
    	<p align="center">{{$data->cvdia7}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="80"><div align="center">{{$data->cvmes8}}</div>
    	<p align="center">{{$data->cvdia8}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="80"><div align="center">{{$data->cvmes9}}</div>
    	<p align="center">{{$data->cvdia9}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="80"><div align="center">{{$data->cvmes10}}</div>
    	<p align="center">{{$data->cvdia10}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="80"><div align="center">{{$data->cvmes11}}</div>
    	<p align="center">{{$data->cvdia11}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="80"><div align="center">{{$data->cvmes12}}</div>
    	<p align="center">{{$data->cvdia12}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    </tr>
  <tr>
    <td width="125" height="75"><div align="center">{{$data->cvmes13}}</div>
    	<p align="center">{{$data->cvdia13}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes14}}</div>
    	<p align="center">{{$data->cvdia14}}</p>
      	<p align="center">@foreach($data->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes15}}</div>
    	<p align="center">{{$data->cvdia15}}</p>
      	<p align="center"></strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes16}}</div>
    	<p align="center">{{$data->cvdia16}}</p>
      	<p align="center"></strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes17}}</div>
    	<p align="center">{{$data->cvdia17}}</p>
      	<p align="center"></strong></p></div></td>
    <td width="125" height="75"><div align="center">{{$data->cvmes18}}</div>
    	<p align="center">{{$data->cvdia18}}</p>
      	<p align="center"></strong></p></div></td>
    </tr>
  <!--<tr>
    <td width="125" height="80"><div align="center"></div></td>
    <td width="125" height="80"><div align="center"></div></td>
    <td width="125" height="80"><div align="center"></div></td>
    <td width="125" height="80"><div align="center"></div></td>
    <td width="125" height="80"><div align="center"></div></td>
    <td width="125" height="80"><div align="center"></div></td>
    </tr>-->
</table>
<div align="center">
  <table width="900" border="0">
    <tr>
      <td width="750" nowrap="nowrap"><div align="left"><em><strong>NOTA: EL PROFESOR VIENE CADA 8 DIAS PARA SU HOSPEDAJE Y VIÁTICOS.</strong></em></div></td>
      </tr>
  </table>
  {!! link_to('CalendarioVisiM', $title='Volver', $attributes = ['class' => 'btn btn-default']) !!}
</div>
<div align="left"></div>
<p>&nbsp;</p>
</div>
</body>
</html>