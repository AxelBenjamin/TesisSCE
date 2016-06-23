<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CicloEscolar2 extends Model
{
    protected $table = 'ciclo_escolars';
    protected $fillable = ['nombre','fechaInicio','fechaFinal'];
    protected $guarded = ['id'];
}
