<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CicloEscolar extends Model
{
    protected $table = 'ciclo_escolars';
    protected $fillable = ['nombre','fechaInicio','fechaFinal'];
    protected $guarded = ['id'];
    
    public function semestres(){
   		return $this->hasMany('App\Semestre','ciclo_escolars_id');
	}
}
