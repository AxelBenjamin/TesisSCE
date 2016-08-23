<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table = 'semestres';

    protected $fillable = ['nombre'];
    protected $guarded = ['id'];

    public function ciclo_escolars(){

   		return $this->belongsTo('ciclo_escolars')
   		//Linea de abajo s para acceder a los otros datos
   		->withPivot('ciclo_escolars_id','nombre','fechaInicio','fechaFinal');
	
	}

}
