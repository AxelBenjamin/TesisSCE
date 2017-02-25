<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model {
    protected $fillable = ['tipo', 'calificacionfaltaD1','calificacionD1','calificacionFaltaD2','calificacionD2','calificacionfaltaP','calificacionP','calificacionsemestre','calificacionFA','calificacionFB','calificaciontotal', 'grupos_id', 'alumnos_id', 'maestros_id', 'materias_id', 'semestres_id', 'ciclo_escolars_id'];

public function grupos(){
      return $this->belongsTo('App\Grupo', 'grupos_id');
  }

public function alumnos(){
   		return $this->belongsTo('App\Alumno', 'alumnos_id');
	}

public function maestros(){
      return $this->belongsTo('App\Maestro', 'maestros_id');
  }

public function materias(){
      return $this->belongsTo('App\Materia', 'materias_id');
  }

public function semestres(){
      return $this->belongsTo('App\Semestre', 'semestres_id');
  }

public function ciclo_escolars(){
      return $this->belongsTo('App\CicloEscolar', 'ciclo_escolars_id');
  }

}