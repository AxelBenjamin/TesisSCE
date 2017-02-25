<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanEstudios extends Model
{
    protected $fillable = ['clave','nombre','archivo'];

    public function reportes(){

   		return $this->hasMany('App\Reporte','plan_estudios_id');
	}
}
