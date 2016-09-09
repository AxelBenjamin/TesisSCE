<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    //protected $table = 'semestres';

    protected $fillable = ['nombre', 'ciclo_escolars_id'];
    
    //protected $guarded = ['id'];

    public function ciclo_escolars(){

   		return $this->belongsTo('App\CicloEscolar', 'ciclo_escolars_id');
   		//Linea de abajo s para acceder a los otros datos
   		//->withPivot('ciclo_escolars_id','nombre','fechaInicio','fechaFinal');
	
	}

}
