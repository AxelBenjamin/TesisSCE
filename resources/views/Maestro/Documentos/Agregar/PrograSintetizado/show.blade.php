<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
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
      <td width="668"><h2 align="center">UNIVERSIDAD AMERICANA DE ACAPULCO, A.C.</h2></td>
    </tr>
  </table>
</div>
<div align="center">
  <table width="364" border="0">
    <tr>
      <td width="358"><div align="center"> <strong>(Clave de Incorporación 8852-58)</strong>      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="430" border="0">
    <tr>
      <td width="255" nowrap="nowrap"><div align="center">
        <h3><strong>INGENIERÍA EN COMPUTACIÓN</strong></h3>
      </div></td>
    </tr>
  </table>
  <table width="400" border="0">
    <tr>
      <td width="400"><div align="center"><strong>MATERIA: {{$PrograSintetizado->materias->nombre}}</div></strong></td>
    </tr>
  </table>
  <table width="400" border="0">
    <tr>
      <td><div align="center"><strong>Clave: {{$PrograSintetizado->materias->clave}}</strong></div></td>
    </tr>
  </table>
  <table width="400" border="0">
    <tr>
      <td><div align="center">Materia {{$PrograSintetizado->materias->tipo}}</div></td>
    </tr>
    <tr>
      <td><div align="center">Ciclo lectivo {{$PrograSintetizado->ciclo_escolars->nombre}}</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="450" border="0">
    <tr>
      <td><div align="center">Nombre del profesor</div></td>
    </tr>
    <tr>
      <td><div align="center"><strong>
            {{$PrograSintetizado->maestros->grado}}
            {{$PrograSintetizado->maestros->apa}}
            {{$PrograSintetizado->maestros->ama}}
            {{$PrograSintetizado->maestros->nombre}}</strong>
      </div></td>
    </tr>
    <br>
    <tr>
      <td><div align="center">DICTAMEN DEFINITIVO 10</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
<table width="400" border="0">
    <tr>
      <td><div align="center">Grupo {{$PrograSintetizado->grupos->nombre}} IC</div></td>
    </tr>
    <tr>
      <td><div align="center">Horario: <br>
      {{$PrograSintetizado->materias->dia1}} {{$PrograSintetizado->materias->dia1horario}}<br>
      {{$PrograSintetizado->materias->dia2}} {{$PrograSintetizado->materias->dia2horario}}<br>
      {{$PrograSintetizado->materias->dia3}} {{$PrograSintetizado->materias->dia3horario}}
      </div></td>
    </tr>
    
    <tr>
      <td><div align="center">Total de horas por semana: {{$PrograSintetizado->psetotalhrssemana}}</div></td>
    </tr>
    <tr>
      <td><div align="center">Número de clases por semana: {{$PrograSintetizado->psenumclasessemana}}</div></td>
    </tr>
  </table>
<p>&nbsp;</p>
<p></p>
</div>
<div align="center">
  <table width="1000" border="0">
    <tr>
      <td><strong>Presentación</strong></td>
    </tr>
    <tr>
      <td><div align="justify">Esta asignatura de carácter informativo-formativa, intenta introducirte en los conocimientos generales de las herramientas utilizadas para resolver problemas de ingeniería y en especial del área de electrónica y telecomunicaciones.</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Propósitos</strong></td>
    </tr>
    <tr>
      <td><div align="justify">El alumno conocerá la estructura interna de los bloques funcionales de lógica combinacional y secuencial para aplicarlos al diseño, modelado, programación y construcción de sistemas digitales.</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Unidades:</strong></td>
    </tr>
    <tr>
      <td>Las unidades y prácticas de que consta esta asignatura, son las siguientes, las cuales se impartirán en las fechas que se señalan:</td>
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

    @foreach($PrograSintetizado->materias->unidads as $unidad)
    <tr>
      <td height="40"><div align="justify">{{$unidad->nombre}}</div></td>
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
  </table>
  <table width="1000" border="0" cellspacing="0">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Metodología</strong></td>
    </tr>
    <tr>
      <td><div align="justify">La metodología que aplicaremos en este curso, estará centrada en la participación individual y en grupo, para fomentar la responsabilidad personal, la cooperación y el trabajo en equipo, así como un manejo dinámico de los contenidos temáticos, que permitan que adquieras los aprendizajes propuestos para esta asignatura, privilegiando el trabajo en el aula y reduciendo el trabajo extra clase.

      Las actividades de enseñanza aprendizaje a seguirse, consisten en: Investigación del tema; Explicación en clase,: Ejercicios resueltos en clase  Ejercicios de tarea, Practicas de Laboratorio, Lecturas Obligatorias, Trabajo de Investigación</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Evaluación</strong></td>
    </tr>
    <tr>
      <td><div align="justify">Los exámenes departamentales y Finales, asistencia, calificación en practicas,  que aplicaremos durante el curso, y otras actividades evaluativos, tienen la finalidad de ser el medio para que conozcas tus avances en el logro de los propósitos del curso y de cada unidad que lo integran. Los resultados  de los exámenes los utilizaremos para obtener las calificaciones correspondientes.</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Aspectos a evaluar</strong></td>
    </tr>
  </table>
  <div align="center">
    <table width="1000" border="0" cellspacing="0">
      <tr>
        <td width="220"><div align="right">{{$PrograSintetizado->pseagdepartamentales}}</div></td>
        
      </tr>
      <tr>
        <td><div align="right">{{$PrograSintetizado->pseagpracticas}}</div></td>
        
      </tr>
      <tr>
        <td><div align="right">{{$PrograSintetizado->pseagtareaspart}}</div></td>
        
      </tr>
      <tr>
        <td><div align="right">Total  100%</div></td>
        
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
  <table width="900">
    <tr>
    <th width="220" scope="col"><div align="left">Exámenes Departamentales</div></th>
    <th width="120" scope="col"><div align="left">Fechas</div></th>
    <th width="220" scope="col"><div align="left">Exámenes Finales</div></th>
    <th width="320" scope="col"><div align="left">Fechas</div></th>
  </tr>
  <tr>
    <td>1er examen</td>
    <td>{{$PrograSintetizado->materias->fechad1}}</td>
    <td>Examen A</td>
    <td>{{$PrograSintetizado->materias->fechaA}}</td>
  </tr>
  <tr>
    <td>2do examen</td>
    <td>{{$PrograSintetizado->materias->fechad2}}</td>
    <td>Examen B</td>
    <td>{{$PrograSintetizado->materias->fechaB}}</td>
  </tr>
</table>
  <table width="1000">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Requisitos para exentar</strong></td>
    </tr>
    <tr>
      <td>Para que quedes exento de presentar el examen final del curso, deberás tener:</td>
    </tr>
    <tr>
      <td>a. {{$PrograSintetizado->pseagreqexentarA}}</td>
    </tr>
    <tr>
      <td>b. {{$PrograSintetizado->pseagreqexentarB}}</td>
    </tr>
    <tr>
      <td>c. {{$PrograSintetizado->pseagreqexentarC}}</td>
    </tr>
  </table>
  <table width="1000">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Asignación de calificaciones</strong></td>
    </tr>
    <tr>
      <td>El promedio del semestre se promediará con la calificación de los exámenes finales A y B.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Bibliografía</strong></td>
    </tr>
    <tr>
      <td>Será necesario la consulta de los siguientes libros:</td>
    </tr>

    @foreach($PrograSintetizado->materias->unidads as $unidad)
    <tr>
      <td>{{$unidad->bibliografia}}</td>
    </tr>
    @endforeach

  </table>
</div>
<p>&nbsp;</p>
</body>
</html>