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
    <p>&nbsp;</p>
    <img src="/src/imagenes/logo_americana_vertical.jpg" class="img-responsive" alt="" width="111" height="160" align="left" /><img src="/src/imagenes/logo_computacion.png" class="img-responsive" alt="" width="111" height="160" align="right" />
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
    <table width="430" border="0">
      <tr>
        <td width="255" nowrap="nowrap"><div align="center"><strong>CALENDARIZACIÓN DE PROFESORES VISITANTES</strong></div></td>
      </tr>
    </table>
    <table width="240" border="0">
      <tr>
        <td width="312"><div align="left"><strong>CICLO ESCOLAR {{$Visita->ciclo_escolars->nombre}}</strong></div></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p></p>
  </div>
</div>
<div align="center">
  <table width="750" border="0">
    <tr>
      <td nowrap="nowrap"><strong>PROFESOR: {{$Visita->maestros->grado}}
      {{$Visita->maestros->apa}}
		{{$Visita->maestros->ama}}
		{{$Visita->maestros->nombre}}</strong></td>
    </tr>
    <tr>
      <td width="900" nowrap="nowrap"><strong>MATERIAS: 
      	@foreach($Visita->maestros->materias as $materia)
			{{$materia->nombre}} -
		@endforeach</strong></td>
    </tr>
  </table>
  <table width="750" border="0">
    <tr>
      <td width="450" nowrap="nowrap"><strong>TOTAL DE HORAS A LA SEMANA: {{$Visita->cvhrsemana}}</strong></td>
      <td width="450" nowrap="nowrap"><strong>HORAS POR GRUPO: {{$Visita->cvhrgrupo}}</strong></td>
    </tr>
  </table>
  <table width="750" border="0">
    <tr>
      <td width="900" nowrap="nowrap"><strong>GRUPOS: 
      @foreach($Visita->maestros->materias as $materia)
			{{$materia->grupos->nombre}} -
	@endforeach</strong></td></strong></td>
    </tr>
  </table>
<p>&nbsp;</p>
<table width="900" border="1" cellspacing="0">
  <tr>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes1}}
    </div>
      <p align="center">{{$Visita->cvdia1}}</p>
      <p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes2}}</div>
    	<p align="center">{{$Visita->cvdia2}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes3}}</div>
    	<p align="center">{{$Visita->cvdia3}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes4}}</div>
    	<p align="center">{{$Visita->cvdia4}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes5}}</div>
    	<p align="center">{{$Visita->cvdia5}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes6}}</div>
    	<p align="center">{{$Visita->cvdia6}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    </tr>
  <tr>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes7}}</div>
    	<p align="center">{{$Visita->cvdia7}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes8}}</div>
    	<p align="center">{{$Visita->cvdia8}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes9}}</div>
    	<p align="center">{{$Visita->cvdia9}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes10}}</div>
    	<p align="center">{{$Visita->cvdia10}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes11}}</div>
    	<p align="center">{{$Visita->cvdia11}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes12}}</div>
    	<p align="center">{{$Visita->cvdia12}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    </tr>
  <tr>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes13}}</div>
    	<p align="center">{{$Visita->cvdia13}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes14}}</div>
    	<p align="center">{{$Visita->cvdia14}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes15}}</div>
    	<p align="center">{{$Visita->cvdia15}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes16}}</div>
    	<p align="center">{{$Visita->cvdia16}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes17}}</div>
    	<p align="center">{{$Visita->cvdia17}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    <td width="125" height="125"><div align="center">{{$Visita->cvmes18}}</div>
    	<p align="center">{{$Visita->cvdia18}}</p>
      	<p align="center">@foreach($Visita->maestros->materias as $materia){{$materia->grupos->nombre}} - @endforeach</strong></p></div></td>
    </tr>
  <tr>
    <td width="125" height="125"><div align="center"></div></td>
    <td width="125" height="125"><div align="center"></div></td>
    <td width="125" height="125"><div align="center"></div></td>
    <td width="125" height="125"><div align="center"></div></td>
    <td width="125" height="125"><div align="center"></div></td>
    <td width="125" height="125"><div align="center"></div></td>
    </tr>
</table>
<div align="center">
  <table width="900" border="0">
    <tr>
      <td width="750" nowrap="nowrap"><div align="left"><em><strong>NOTA: EL PROFESOR VIENE CADA 8 DIAS PARA SU HOSPEDAJE Y VIÁTICOS.</strong></em></div></td>
      </tr>
  </table>
  {!! link_to('CalendarioVisi', $title='Volver', $attributes = ['class' => 'btn btn-default']) !!}
</div>
<div align="left"></div>
<p>&nbsp;</p>
</div>
</body>
</html>