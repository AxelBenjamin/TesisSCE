<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Alumno extends Model
{
    protected $fillable = ['nombre','apa','ama','nacimiento','nacionalidad','curp','matricula','contraseña','colonia','calle','cp','municipio','estado','telefono','correo','foto', 'grupos_id'];
    //protected $guarded = ['id'];
    
    public function grupos(){

   		return $this->belongsTo('App\Grupo', 'grupos_id');
   	}

   	public function reportes(){

   		return $this->hasMany('App\Reporte','reportes_id');
	}

   	public function setFotoAttribute($foto){
		if(!empty($foto)){
			$this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
		$nombre = Carbon::now()->second.$foto->getClientOriginalName();
		\Storage::disk('local')->put($nombre,\File::get($foto));
		}
	}


}