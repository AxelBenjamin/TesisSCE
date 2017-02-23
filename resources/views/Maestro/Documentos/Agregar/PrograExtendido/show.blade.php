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
  <p>&nbsp;</p>
  <table width="635" border="0">
    <tr>
      <td width="668"><h2 align="center">FORMATO DE PROGRAMA OPERATIVO</h2></td>
    </tr>
  </table>
</div>
<div align="center">
  <table width="1000" border="0" cellspacing="0">
    <tr>
      <td>DATOS DE LA INSTITUCIÓN
        <table width="1000" border="1" cellspacing="0">
          <tr>
            <td width="100">NOMBRE</td>
            <td width="718">UNIVERSIDAD AMERICANA DE ACAPULCO, A.C.</td>
            <td width="100">CLAVE</td>
            <td width="64"><div align="center">8852</div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="1000" border="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>DATOS DEL PROFESOR
        <table width="1000" border="1" cellspacing="0">
          <tr>
            <td width="100">NOMBRE</td>
            <td width="450">
              {{$PrograExtendido->maestros->grado}}
              {{$PrograExtendido->maestros->apa}}
              {{$PrograExtendido->maestros->ama}}
              {{$PrograExtendido->maestros->nombre}}
            </td>
            <td width="100">DICTAMEN</td>
            <td width="332">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td width="210">FECHA DE ELABORACIÓN</td>
      <td width="150">{{$PrograExtendido->fechaelaboracion}}</td>
      <td width="472"><p>FECHA DE REVISIÓN FINAL Y FIRMA DEL DIRECTOR</p></td>
      <td width="150">&nbsp;</td>
    </tr>
  </table>
  <table width="1000" border="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>DATOS DE LA ASIGNATURA
        <table width="1000" border="1" cellspacing="0">
          <tr>
            <td width="170">NOMBRE</td>
            <td colspan="5">{{$PrograExtendido->materias->nombre}}</td>
          </tr>
          <tr>
            <td>CLAVE</td>
            <td width="100">{{$PrograExtendido->materias->clave}}<div align="center"></div></td>
            <td width="200">OPTATIVA/OBLIGATORIA</td>
            <td width="150">{{$PrograExtendido->materias->tipo}}<div align="center"></div></td>
            <td width="204">CICLO ESCOLAR</td>
            <td width="150">{{$PrograExtendido->ciclo_escolars->nombre}}<div align="center"></div></td>
          </tr>
          <tr>
            <td>HORAS POR SEMANA</td>
            <td><div align="center">{{$PrograExtendido->psetotalhrssemana}}</div></td>
            <td>HORAS TEORICAS</td>
            <td><div align="center">{{$PrograExtendido->psehrsteoricas}}</div></td>
            <td>HORAS PRACTICAS</td>
            <td><div align="center">{{$PrograExtendido->psehrspracticas}}</div></td>
          </tr>
          <tr>
            <td>PLAN DE ESTUDIOS</td>
            <td><div align="center">{{$PrograExtendido->plan_estudios->nombre}}</div></td>
            <td>GRUPO(S)</td>
            <td><div align="center">{{$PrograExtendido->grupos->nombre}}</div></td>
            <td>CLASES POR SEMANA</td>
            <td><div align="center">{{$PrograExtendido->psenumclasessemana}}</div></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="1000" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>PROPÓSITOS U OBJETIVOS GENERALES DEL CURSO (Se encuentran en &quot;Normatividad&quot; en la página electrónica www.dgire.unam.mx de la DGIRE)</td>
    </tr>
  </table>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td><div align="justify">EL ALUMNO CONOCERA LA ESTRUCTURA INTERNA DE LOS BLOQUES FUNCIONALES DE LÓGICA COMBINACIONAL Y SECUENCIAL PARA APLICARLOS AL DISEÑO, MODELADO, PROGRAMACIÓN Y CONSTRUCCIÓN DE SISTEMAS DIGITALES EMPLEANDO HERRAMIENTAS MODERNAS DE SOFTWARE, LENGUAJES DE DESCRIPCIÓN DE HARDWARE Y DISPOSITIVOS LÓGICOS PROGRAMABLES.</div></td>
    </tr>
  </table>
  <table width="1000" cellspacing="0">
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
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td colspan="4">CALENDARIZACIÓN DE UNIDADES Y CÁLCULO DE HORAS, CLASES Y PRÁCTICAS.</td>
    </tr>
    <tr>
      <td width="266"><div align="center">UNIDADES</div></td>
      <td width="308"><div align="center">HORAS</div></td>
      <td width="204"><div align="center">CLASES TEÓRICAS</div></td>
      <td width="204"><div align="center">CLASES PRÁCTICAS</div></td>
    </tr>
  </table>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td><div align="justify"></div></td>
      <td width="100"><div align="center">TOTAL</div></td>
      <td width="100"><div align="center">TEÓRICAS</div></td>
      <td width="100"><div align="center">PRÁCTICAS</div></td>
      <td width="100"><div align="center">NÚMERO</div></td>
      <td width="100"><div align="center">FECHAS</div></td>
      <td width="100"><div align="center">NÚMERO</div></td>
      <td width="100"><div align="center">FECHAS</div></td>
    </tr>

    @foreach($PrograExtendido->materias->unidads as $unidad)
    <tr>
      <td><div align="justify">
        <p>{{$unidad->nombre}}</p>
      </div></td>
      <td width="100"><div align="center">{{$unidad->hrsteoricas + $unidad->hrspracticas}}</div></td>
      <td width="100"><div align="center">{{$unidad->hrsteoricas}}</div></td>
      <td width="100"><div align="center">{{$unidad->hrspracticas}}</div></td>
      <td width="100"><div align="center">{{$unidad->clasesteoricas}}</div></td>
      <td width="100"><div align="center">{{$unidad->fechaprogramada}}</div></td>
      <td width="100"><div align="center">{{$unidad->clasespracticas}}</div></td>
      <td width="100"><div align="center">{{$unidad->fechaprogramada}}</div></td>
    </tr>
    @endforeach
    
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <p>&nbsp;</p>
      </div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
      <td width="100"><div align="center"></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="1000" cellspacing="0">
    <tr>
      <td><table width="1000" border="1" cellspacing="0">
        <tr>
          <td colspan="2"><div align="center">SISTEMA DE EVALUACIÓN</div></td>
          </tr>
        <tr>
          <td width="190"><div align="center">ELEMENTOS</div></td>
          <td width="800"><div align="center">DESCRIPCIÓN</div></td>
        </tr>
        <tr>
          <td>FACTORES A EVALUAR</td>
          <td>Examenes departamentales, examenes final A y B</td>
        </tr>
        <tr>
          <td>PERÍODOS Y UNIDADES DE EVALUACIÓN</td>
          <td><p>Primer Departamental {{$PrograExtendido->materias->fechad1}}</p>
            <p>Segundo Departamental {{$PrograExtendido->materias->fechad2}}</p>
            <p>Examen Final A {{$PrograExtendido->materias->fechaA}}</p>
            <p>Examen Final B {{$PrograExtendido->materias->fechaB}}</p></td>
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
  <p>&nbsp;</p>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td width="540"><div align="center">BIBLIOGRAFÍA BÁSICA Y DE CONSULTA</div></td>
      <td width="450"><div align="center">RECURSOS DIDACTICOS</div></td>
    </tr>

    @foreach($PrograExtendido->materias->unidads as $unidad)
    <tr>
      <td>{{$unidad->bibliografia}}</td>
      <td>{{$unidad->recursosdidacticos}}
      </td>
    </tr>
    @endforeach

  </table>
  <p>&nbsp;</p>

  @foreach($PrograExtendido->materias->unidads as $unidad)
  <table width="1000" cellspacing="0">
    <tr>
      <br>
      <td>PLANEACIÓN DE UNIDAD</td>
    </tr>
  </table>
  <table width="1000" border="1" cellspacing="0">

  
  <br>
    <tr>
      <td width="125">UNIDAD/TEMA:</td>
      <td width="517">{{$unidad->nombre}}</td>
      <td width="344">NÚMERO: </td>
    </tr>
  </table>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td width="125"><p align="justify">PROPÓSITO(S)</p>
      <p align="justify">OBJETIVOS(S)</p></td>
      <td width="373"><div align="center">CONTENIDO TEMÁTICO</div></td>
      <td width="140"><div align="center">FECHAS PROGRAMADAS</div></td>
      <td width="250"><p align="center">ACTIVIDADES DE ENSEÑANZA </p>
      <p align="center">APRENDIZAJE</p></td>
      <td width="90"><div align="center">FECHAS REALES</div></td>
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
  <p>&nbsp;</p>
  <table width="1000" border="1" cellspacing="0">
    <tr>
      <td><div align="center">RECURSOS DIDACTICOS</div></td>
      <td><div align="center">BIBLIOGRAFÍA BÁSICA Y CONSULTA</div></td>
      <td><div align="center">SISTEMA DE EVALUACIÓN</div></td>
    </tr>
    <tr>
      <td>{{$unidad->recursosdidacticos}}</td>
      <td>{{$unidad->bibliografia}}</td>
      <td>{{$unidad->sistemaevaluacion}}</td>
    </tr>
  
  @endforeach

  </table>
  <p>&nbsp;</p>
<p></p>
</div>
<div align="center">
  <div align="center"></div>
</div>
<p>&nbsp;</p>
</body>
</html>