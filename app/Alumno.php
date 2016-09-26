<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre','apa','ama','nacimiento','nacionalidad','curp','matricula','contraseña','colonia','calle','cp','municipio','estado','telefono','correo','foto', 'grupos_id'];
    //protected $guarded = ['id'];
    
    public function grupos(){

   		return $this->belongsTo('App\Grupo', 'grupos_id');
   	}
}