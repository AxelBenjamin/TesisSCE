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

    public function calificacions(){

      return $this->hasMany('App\Calificacion','alumnos_id');
  }

  //Hago función para concatenar columnas(mostrar mas de 1 columna en el combo box)
  public function getnombreCompletoAttribute(){
    return $this->attributes['apa'] .' '. $this->attributes['ama'] .' '. $this->attributes['nombre'];
  }

   	public function setFotoAttribute($foto){
		if(!empty($foto)){
			$this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
		$nombre = Carbon::now()->second.$foto->getClientOriginalName();
		\Storage::disk('local')->put($nombre,\File::get($foto));
		}
	}


}