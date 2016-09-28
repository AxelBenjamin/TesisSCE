<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $fillable = ['nombre','hrsteoricas','hrspracticas','clasesteoricas','clasespracticas','bibliografia','aprendizaje','recursosdidacticos','propositos','sistemaevaluacion','materias_id'];

    public function materias(){

   		return $this->belongsTo('App\Materia', 'materias_id');
   		//Linea de abajo s para acceder a los otros datos
   		//->withPivot('ciclo_escolars_id','nombre','fechaInicio','fechaFinal');
	
	}

	
}
