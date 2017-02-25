<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Http\Requests;

use App\Materia;
use App\Semestre;
use App\CicloEscolar;
use App\Grupo;
use App\Maestro;
use App\Alumno;
use App\Reporte;
use App\Tema;
use App\Unidad;

class CalificacionesFaltas extends Controller
{
    public function index()
    {
        /*$Calificaciones = Reporte::all()->where('tipo', 'Calificacion')->sortBy("materias_id")->sortBy("alumnos_id")->sortBy("grupos_id");
        return View::make('Maestro.Documentos.Agregar.Calificaciones.index')->with("Calificaciones", $Calificaciones);*/

        $Materias = Materia::all();
        return View::make('Maestro.Documentos.Agregar.Calificaciones.index')->with("Materias", $Materias);
    }

    public function mostrar($id)
    {
        $Materia = Materia::find($id);
        return View::make('Maestro.Documentos.Agregar.Calificaciones.mostrar')->with("Materia", $Materia);
    }
}
