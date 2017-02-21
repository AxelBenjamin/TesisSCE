<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = ['tipo', 'calificacionfaltaD1','calificacionD1','calificacionFaltaD2','calificacionD2','calificacionfaltaP','calificacionP','calificacionsemestre','calificacionFA','calificacionFB','calificaciontotal','cvtotalhrssemana','cvhrsgrupo','cvmes','cvdia1','cvdia2','psetotalhrssemana','psenumclasessemana','pseagdepartamentales','pseagpracticas','pseagtareaspart','pseagreqexentarA','pseagreqexentarB','pseagreqexentarC','psehrsteoricas','psehrspracticas','psepropositocurso','agtrabajopracfin','temas_id','plan_estudios_id','alumnos_id', 'ciclo_escolars_id', 'materias_id', 'grupos_id', 'maestros_id', 'semestres_id'];

    //Horario . - Ciclo escolar, grupo, materia, maestro, psehrspracticas y psehrsteoricas
    //Calen Exam .- 
    //cvtotalhrssemana, cvhrsgrupo, cvmes, cvdia1, cvdia2  

    public function temas(){
   		return $this->belongsTo('App\Tema', 'temas_id');
	}

	public function plan_estudios(){
   		return $this->belongsTo('App\PlanEstudios', 'plan_estudios_id');
	}

	public function alumnos(){
   		return $this->belongsTo('App\Alumno', 'alumnos_id');
	}

  //Relaciones extras indirectas
  public function ciclo_escolars(){
      return $this->belongsTo('App\CicloEscolar', 'ciclo_escolars_id');
  }

  public function materias(){
      return $this->belongsTo('App\Materia', 'materias_id');
  }

  public function grupos(){
      return $this->belongsTo('App\Grupo', 'grupos_id');
  }

  public function maestros(){
      return $this->belongsTo('App\Maestro', 'maestros_id');
  }

  public function semestres(){
      return $this->belongsTo('App\Semestre', 'semestres_id');
  }

}
