<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    protected $fillable = ['cvhrsemana','cvhrgrupo','cvmes1','cvdia1', 'cvmes2','cvdia2', 'cvmes3','cvdia3', 'cvmes4','cvdia4', 'cvmes5','cvdia5', 'cvmes6','cvdia6', 'cvmes7','cvdia7', 'cvmes8','cvdia8','cvmes9','cvdia9', 'cvmes10','cvdia10', 'cvmes11','cvdia11', 'cvmes12','cvdia12', 'cvmes13','cvdia13', 'cvmes14','cvdia14', 'cvmes15','cvdia15', 'cvmes16','cvdia16', 'cvmes17','cvdia17', 'cvmes18','cvdia18', 'cvmes19','cvdia19', 'cvmes20','cvdia20', 'cvmes21','cvdia21', 'cvmes22','cvdia22', 'cvmes23','cvdia23', 'cvmes24','cvdia24', 'maestros_id', 'ciclo_escolars_id'];

	public function maestros(){

   		return $this->belongsTo('App\Maestro', 'maestros_id');
   	}

   	public function ciclo_escolars(){

   		return $this->belongsTo('App\CicloEscolar', 'ciclo_escolars_id');
	}

}
