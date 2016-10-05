<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Maestro extends Model
{
    protected $fillable = ['nombre','apa','ama','nacimiento','nacionalidad','curp','matricula','contraseña','colonia','calle','cp','municipio','estado','telefono','correo','foto', 'rfc'];

    public function materias(){

   		return $this->hasMany('App\Materia','maestros_id');
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
