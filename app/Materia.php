<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['clave','nombre','fechad1','fechad2','fechaA','fechaB','dia1','dia1horario','dia2','dia2horario','dia3','dia3horario', 'semestres_id','maestros_id'];

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

  public function unidades(){

      return $this->hasMany('App\Unidad','unidades_id');
  }
}
