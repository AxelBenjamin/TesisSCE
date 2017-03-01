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

	public function reportes(){

   		return $this->hasMany('App\Reporte','reportes_id');
	}

	public function calificacions(){

   		return $this->hasMany('App\Calificacion','grupos_id');
	}

  public function materias(){

      return $this->hasMany('App\Materia','grupos_id');
  }
  
}
