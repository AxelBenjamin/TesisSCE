<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programa Extendido</title>
<style type="text/css">
body,td,th {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>
</head>

<body>
<div align="center">
  <table width="775" border="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="775"><h3 align="center">FORMATO DE PROGRAMA OPERATIVO</h3></td>
    </tr>
  </table>
</div>
<div align="center">
  <table width="560" border="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>DATOS DE LA INSTITUCIÓN
        <table width="775" border="1" cellspacing="0">
          <tr>
            <td width="50"><div align="center">NOMBRE</div></td>
            <td width="400">UNIVERSIDAD AMERICANA DE ACAPULCO, A.C.</td>
            <td width="50"><div align="center">CLAVE</div></td>
            <td width="50"><div align="center">8852</div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="775" border="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>DATOS DEL PROFESOR
        <table width="775" border="1" cellspacing="0">
          <tr>
            <td width="50"><div align="center">NOMBRE</div></td>
            <td width="400">
              {{$data->maestros->grado}}
              {{$data->maestros->apa}}
              {{$data->maestros->ama}}
              {{$data->maestros->nombre}}
            </td>
            <td width="70"><div align="center">DICTAMEN</div></td>
            <td width="50"><div align="center">&nbsp;</div></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <table width="775" border="1" cellspacing="0">
    <tr>
      <td width="200"><div align="center">FECHA DE ELABORACIÓN</div></td>
      <td width="100"><div align="center">{{$data->fechaelaboracion}}</div></td>
      <td width="350"><div align="center"><p>FECHA DE REVISIÓN FINAL Y FIRMA DEL DIRECTOR</p></div></td>
      <td width="100">&nbsp;</td>
    </tr>
  </table>
  <table width="775" border="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>DATOS DE LA ASIGNATURA
        <table width="775" border="1" cellspacing="0">
          <tr>
            <td width="160">NOMBRE</td>
            <td colspan="5">{{$data->materias->nombre}}</td>
          </tr>
          <tr>
            <td>CLAVE</td>
            <td width="70"><div align="center">{{$data->materias->clave}}</div></td>
            <td width="180">OPTATIVA/OBLIGATORIA</td>
            <td width="100"><div align="center">{{$data->materias->tipo}}</div></td>
            <td width="150">CICLO ESCOLAR</td>
            <td width="80"><div align="center">{{$data->ciclo_escolars->nombre}}</div></td>
          </tr>
          <tr>
            <td>HORAS POR SEMANA</td>
            <td><div align="center">{{$data->psetotalhrssemana}}</div></td>
            <td>HORAS TEORICAS</td>
            <td><div align="center">{{$data->psehrsteoricas}}</div></td>
            <td>HORAS PRACTICAS</td>
            <td><div align="center">{{$data->psehrspracticas}}</div></td>
          </tr>
          <tr>
            <td>PLAN DE ESTUDIOS</td>
            <td><div align="center">{{$data->plan_estudios->nombre}}</div></td>
            <td>GRUPO(S)</td>
            <td><div align="center">{{$data->grupos->nombre}}</div></td>
            <td>CLASES POR SEMANA</td>
            <td><div align="center">{{$data->psenumclasessemana}}</div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="775" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>PROPÓSITOS U OBJETIVOS GENERALES DEL CURSO (Se encuentran en &quot;Normatividad&quot; en la página electrónica www.dgire.unam.mx de la DGIRE)</td>
    </tr>
  </table>
  <table width="775" border="1" cellspacing="0">
    <tr>
      <td><div align="justify">EL ALUMNO CONOCERA LA ESTRUCTURA INTERNA DE LOS BLOQUES FUNCIONALES DE LÓGICA COMBINACIONAL Y SECUENCIAL PARA APLICARLOS AL DISEÑO, MODELADO, PROGRAMACIÓN Y CONSTRUCCIÓN DE SISTEMAS DIGITALES EMPLEANDO HERRAMIENTAS MODERNAS DE SOFTWARE, LENGUAJES DE DESCRIPCIÓN DE HARDWARE Y DISPOSITIVOS LÓGICOS PROGRAMABLES.</div></td>
    </tr>
  </table>
  <table width="775" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>PLANEACIÓN GLOBAL</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="775" border="1" cellspacing="0">
    <tr>
      <td colspan="8">CALENDARIZACIÓN DE UNIDADES Y CÁLCULO DE HORAS, CLASES Y PRÁCTICAS.</td>
    </tr>
    <tr>
      <td colspan="1"><div align="center">UNIDADES</div></td>
      <td colspan="3"><div align="center">HORAS</div></td>
      <td colspan="2"><div align="center">CLASES TEÓRICAS</div></td>
      <td colspan="2"><div align="center">CLASES PRÁCTICAS</div></td>
    </tr>
    <tr>
      <td colspan="1"><div align="justify"></div></td>
      <td colspan="1"><div align="center">TOTAL</div></td>
      <td colspan="1"><div align="center">TEÓRICAS</div></td>
      <td colspan="1"><div align="center">PRÁCTICAS</div></td>
      <td colspan="1"><div align="center">NÚMERO</div></td>
      <td colspan="1"><div align="center">FECHAS</div></td>
      <td colspan="1"><div align="center">NÚMERO</div></td>
      <td colspan="1"><div align="center">FECHAS</div></td>
    </tr>

    @foreach($data->materias->unidads as $unidad)
    <tr>
      <td><div align="justify">
        <p>{{$unidad->nombre}}</p>
      </div></td>
      <td><div align="center">{{$unidad->hrsteoricas + $unidad->hrspracticas}}</div></td>
      <td><div align="center">{{$unidad->hrsteoricas}}</div></td>
      <td><div align="center">{{$unidad->hrspracticas}}</div></td>
      <td><div align="center">{{$unidad->clasesteoricas}}</div></td>
      <td><div align="center">{{$unidad->fechaprogramada}}</div></td>
      <td><div align="center">{{$unidad->clasespracticas}}</div></td>
      <td><div align="center">{{$unidad->fechaprogramada}}</div></td>
    </tr>
    @endforeach
    
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr><tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr><tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr><tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr><tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr><tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
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
  <table width="775" cellspacing="0">
    <tr>
      <td><table width="775" border="1" cellspacing="0">
        <tr>
          <td colspan="2"><div align="center">SISTEMA DE EVALUACIÓN</div></td>
          </tr>
        <tr>
          <td width="200"><div align="center">ELEMENTOS</div></td>
          <td width="500"><div align="center">DESCRIPCIÓN</div></td>
        </tr>
        <tr>
          <td>FACTORES A EVALUAR</td>
          <td>Examenes departamentales, examenes final A y B</td>
        </tr>
        <tr>
          <td>PERÍODOS Y UNIDADES DE EVALUACIÓN</td>
          <td><p>Primer Departamental {{$data->materias->fechad1}}</p>
            <p>Segundo Departamental {{$data->materias->fechad2}}</p>
            <p>Examen Final A {{$data->materias->fechaA}}</p>
            <p>Examen Final B {{$data->materias->fechaB}}</p></td>
        </tr>
        <tr>
          <td>CRITERIOS DE EXENCIÓN</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>ASIGNACIÓN DE CALIFICACIONES</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  

  <table width="775" border="1" cellspacing="0">
    <tr>
      <td width="350"><div align="center">BIBLIOGRAFÍA BÁSICA Y DE CONSULTA</div></td>
      <td width="350"><div align="center">RECURSOS DIDACTICOS</div></td>
    </tr>

    @foreach($data->materias->unidads as $unidad)
    <tr>
      <td>{{$unidad->bibliografia}}</td>
      <td>{{$unidad->recursosdidacticos}}
      </td>
    </tr>
    @endforeach

  </table>
  <table width="775" cellspacing="0">
  <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  @foreach($data->materias->unidads as $unidad)
  <table width="775" cellspacing="0">
    <tr>
      <br>
      <td>PLANEACIÓN DE UNIDAD</td>
    </tr>
  </table>
  <table width="775" border="1" cellspacing="0">
    <tr>
      <td width="125">UNIDAD/TEMA:</td>
      <td width="400">{{$unidad->nombre}}</td>
      <td width="225">NÚMERO: </td>
    </tr>
  </table>
  <table width="775" border="1" cellspacing="0">
    <tr>
      <td width="125"><p align="justify">PROPÓSITO(S)</p>
      <p align="justify">OBJETIVOS(S)</p></td>
      <td width="200"><div align="center">CONTENIDO TEMÁTICO</div></td>
      <td width="100"><div align="center">FECHAS PROGRAMADAS</div></td>
      <td width="225"><p align="center">ACTIVIDADES DE ENSEÑANZA </p>
      <p align="center">APRENDIZAJE</p></td>
      <td width="100"><div align="center">FECHAS REALES</div></td>
    </tr>

    <tr>
      <td>{{$unidad->propositos }}
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>

      <td>@foreach($unidad->temas as $tema)
          <p>{{$tema->nombre}}</p>
        @endforeach
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>

      <td>{{$unidad->fechaprogramada}}
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>

      <td>{{$unidad->aprendizaje}}
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>

      <td><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
  </table>
  <table width="775" border="1" cellspacing="0">
    <tr>
      <td><div align="center">RECURSOS DIDACTICOS</div></td>
      <td><div align="center">BIBLIOGRAFÍA BÁSICA Y CONSULTA</div></td>
      <td><div align="center">SISTEMA DE EVALUACIÓN</div></td>
    </tr>
    <tr>
      <td><div align="center">{{$unidad->recursosdidacticos}}</div></td>
      <td><div align="center">{{$unidad->bibliografia}}</div></td>
      <td><div align="center">{{$unidad->sistemaevaluacion}}</div></td>
    </tr>
  
  @endforeach

  </table>
</body>
</html>