<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $fillable = ['nombre','apa','ama','nacimiento','nacionalidad','curp','matricula','contraseña','colonia','calle','cp','municipio','estado','telefono','correo','foto', 'rfc'];

    public function materias(){

   		return $this->hasMany('App\Materia','maestros_id');
	}
}
