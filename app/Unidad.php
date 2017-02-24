<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = ['nombre','hrsteoricas','hrspracticas','clasesteoricas','clasespracticas','bibliografia','aprendizaje','recursosdidacticos','propositos','sistemaevaluacion','fechaprogramada','materias_id'];

    public function materias(){

   		return $this->belongsTo('App\Materia', 'materias_id');
   		//Linea de abajo s para acceder a los otros datos
   		//->withPivot('ciclo_escolars_id','nombre','fechaInicio','fechaFinal');
	
	}

  public function temas(){

      return $this->hasMany('App\Tema','unidads_id');
  }

	public function reportes(){

   		return $this->hasMany('App\Reporte','reportes_id');
	}

	
}
