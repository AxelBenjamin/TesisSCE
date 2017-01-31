<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
//use App\Http\Requests;
//use App\Http\Requests;
use App\Grupo;
use App\Alumno;
use App\CicloEscolar;
use App\Materia;
use App\Reporte;
use App\Tema;
use App\PlanEstudios;

class Acuerdos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Acuerdos = Reporte::all()->sortBy("plan_estudios_id");
        return View::make('Maestro.Documentos.Agregar.AcuerdoGrupo.index')->with("Acuerdos", $Acuerdos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        //$Materias = Materia::pluck('nombre', 'id');
        //$Grupos = Grupo::pluck('nombre','id');
        $Temas = Tema::pluck('nombre','id');
        $PlanesEstudios = PlanEstudios::pluck('nombre','id');
        $Alumnos = Alumno::pluck('nombre','id');
        return view::make('Maestro.Documentos.Agregar.AcuerdoGrupo.create')
        /*->with('CiclosEscolares',$CiclosEscolares)->with('Materias',$Materias)->with('Grupos',$Grupos)*/->with('Temas',$Temas)->with('PlanesEstudios',$PlanesEstudios)->with('Alumnos',$Alumnos);
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
        return redirect ('/AcuerdoGrupo')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Acuerdo = Reporte::find($id);
        return View::make('Maestro.Documentos.Agregar.AcuerdoGrupo.show')->with("Acuerdo",$Acuerdo);
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
        Reporte::destroy($id);
        return redirect('/AcuerdoGrupo')->with('message','store');
    }
}
