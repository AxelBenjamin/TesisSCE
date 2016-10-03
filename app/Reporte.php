<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = ['calificacionfaltaD1','calificacionD1','calificacionFaltaD2','calificacionD2','calificacionfaltaP','calificacionP','calificacionsemestre','calificacionFA','calificacionFB','calificaciontotal','cvtotalhrssemana','cvhrsgrupo','cvmes','cvdia1','cvdia2','psetotalhrssemana','psenumclasessemana','pseagdepartamentales','pseagpracticas','pseagtareaspart','pseagreqexentarA','pseagreqexentarB','pseagreqexentarC','psehrsteoricas','psehrspracticas','psepropositocurso','agtrabajopracfin','temas_id','plan_estudios_id','alumnos_id'];

    public function temas(){
   		return $this->belongsTo('App\Tema', 'temas_id');
	}

	public function plan_estudios(){
   		return $this->belongsTo('App\PlanEstudios', 'plan_estudios_id');
	}

	public function alumnos(){
   		return $this->belongsTo('App\Alumno', 'alumnos_id');
	}
}
