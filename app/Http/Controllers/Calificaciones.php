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

class Calificaciones extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Calificaciones = Reporte::all()->where('tipo', 'Calificacion')->sortBy("materias_id")->sortBy("alumnos_id")->sortBy("grupos_id");
        return View::make('Maestro.Documentos.Agregar.Calificaciones.index')->with("Calificaciones", $Calificaciones);

        /*$Materias = Materia::all();
        return View::make('Maestro.Documentos.Agregar.Calificaciones.index2')->with("Materias", $Materias);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Materias = Materia::pluck('nombre', 'id');
        $Maestros = Maestro::all()->pluck("nombreCompleto","id");
        $CicloEscolares = CicloEscolar::pluck('nombre', 'id');
        $Semestres = Semestre::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre','id');
        $Alumnos = Alumno::all()->pluck("nombreCompleto","id");
        //$Alumnos = Alumno::all();
        return view::make('Maestro.Documentos.Agregar.Calificaciones.create')->with('Materias',$Materias)->with('Maestros',$Maestros)->with('CicloEscolares',$CicloEscolares)->with('Semestres',$Semestres)->with('Alumnos',$Alumnos)->with('Grupos',$Grupos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reporte::create($request->all());
        return redirect ('/Calificaciones')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$Calificacion = Reporte::find($id);
        $Materia = Materia::find($id);
        return View::make('Maestro.Documentos.Agregar.Calificaciones.show')->with('Materia',$Materia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
