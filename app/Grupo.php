<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['nombre'];
    //protected $guarded = ['id'];
    
     public function alumnos(){

   		return $this->hasMany('App\Alumno','grupos_id');
	}
}
