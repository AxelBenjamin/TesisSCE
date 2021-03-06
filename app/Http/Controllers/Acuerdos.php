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

    //Con esta función, solo se podrá acceder al controlador si se está autenticado
    public function __construct()
        {
            $this->middleware('maestroAuth');
        }

    public function index()
    {   
        $Acuerdos = Reporte::all()->where('tipo', 'Acuerdo')->sortBy("materias_id");
        //$Grupos = Grupo::all();
        return View::make('Maestro.Documentos.Agregar.AcuerdoGrupo.index')->with("Acuerdos", $Acuerdos);//->with("Grupos", $Grupos);
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function create()
    {
        $CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        $Materias = Materia::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre','id');
        //$Temas = Tema::pluck('nombre','id');
        //$PlanesEstudios = PlanEstudios::pluck('nombre','id');
        $Alumnos = Alumno::all();
        return view::make('Maestro.Documentos.Agregar.AcuerdoGrupo.create')
        ->with('CiclosEscolares',$CiclosEscolares)->with('Materias',$Materias)->with('Grupos',$Grupos)/*->with('Temas',$Temas)->with('PlanesEstudios',$PlanesEstudios)*/->with('Alumnos',$Alumnos);
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
        return View::make('Maestro.Documentos.Agregar.AcuerdoGrupo.show')->with('Acuerdo',$Acuerdo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $Acuerdo = Reporte::find($id);
        $CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        $Materias = Materia::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre','id');
        $Alumnos = Alumno::all();
        return view::make('Maestro.Documentos.Agregar.AcuerdoGrupo.edit')->with('Acuerdo',$Acuerdo)->with('CiclosEscolares',$CiclosEscolares)->with('Materias',$Materias)->with('Grupos',$Grupos)->with('Alumnos',$Alumnos);
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
        $Acuerdo = Reporte::find($id);
        $input = Input::all();
        $Acuerdo->update($input);
        return  redirect('/AcuerdoGrupo')->with('message','store');
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
