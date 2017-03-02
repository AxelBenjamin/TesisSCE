<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['clave','nombre','tipo','fechad1','fechad2','fechaA','fechaB','dia1','dia1horario','dia2','dia2horario','dia3','dia3horario', 'semestres_id','maestros_id', 'grupos_id'];

    public function semestres(){

   		return $this->belongsTo('App\Semestre', 'semestres_id');
   		//Linea de abajo s para acceder a los otros datos
   		//->withPivot('ciclo_escolars_id','nombre','fechaInicio','fechaFinal');
	
	}

	public function maestros(){

   		return $this->belongsTo('App\Maestro', 'maestros_id');
   		//Linea de abajo s para acceder a los otros datos
   		//->withPivot('ciclo_escolars_id','nombre','fechaInicio','fechaFinal');
	}

  public function grupos(){

      return $this->belongsTo('App\Grupo', 'grupos_id');
    }

  public function unidads(){

      return $this->hasMany('App\Unidad','materias_id');
  }

  public function reportes(){

      return $this->hasMany('App\Reporte','materias_id');
                                            //reportes
  }

  public function calificacions(){

      return $this->hasMany('App\Calificacion','materias_id');
  }

  public function grupos(){

      return $this->belongsTo('App\Grupo', 'grupos_id');
    }

}
