<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = ['nombre','unidads_id'];

    public function unidads(){

   		return $this->belongsTo('App\Unidad', 'unidads_id');
	}

	/*Para la relacion con reporte
	public function reportes(){

   		return $this->hasMany('App\Reporte','reportes_id');
	}*/
}
