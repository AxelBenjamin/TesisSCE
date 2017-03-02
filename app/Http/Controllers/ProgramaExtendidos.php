<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

use App\Maestro;

use App\Grupo;
use App\Materia;
use App\CicloEscolar;
use App\Unidad;
use App\Tema;
use App\Reporte;
use App\PlanEstudios;

use App\Http\Requests;

class ProgramaExtendidos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('maestroAuth');
    }
    
    public function index()
    {
        $PrograExtendidos = Reporte::all()->where('tipo', 'ProgramaExtendido')->sortBy("materias_id");
        $Unidades = Unidad::all();
        //$Grupos = Grupo::all();
        return View::make('Maestro.Documentos.Agregar.PrograExtendido.index')->with("PrograExtendidos", $PrograExtendidos)->with("Unidades",$Unidades);
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
        $PlanEstudios = PlanEstudios::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre', 'id');
        //$Alumnos = Alumno::all();
        return view::make('Maestro.Documentos.Agregar.PrograExtendido.create')->with('Materias',$Materias)->with('Maestros',$Maestros)->with('CicloEscolares',$CicloEscolares)->with('PlanEstudios',$PlanEstudios)->with('Grupos',$Grupos);
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
        return redirect ('/PrograExtendido')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $PrograExtendido = Reporte::find($id);
        //$Unidades = Unidad::all();
        return View::make('Maestro.Documentos.Agregar.PrograExtendido.show')->with('PrograExtendido',$PrograExtendido);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PrograExtendido = Reporte::find($id);
        $Materias = Materia::pluck('nombre', 'id');
        $Maestros = Maestro::all()->pluck("nombreCompleto","id");
        $CicloEscolares = CicloEscolar::pluck('nombre', 'id');
        $PlanEstudios = PlanEstudios::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre', 'id');

        return View::make('Maestro.Documentos.Agregar.PrograExtendido.edit')->with('PrograExtendido',$PrograExtendido)->with('Materias',$Materias)->with('Maestros',$Maestros)->with('CicloEscolares',$CicloEscolares)->with('PlanEstudios',$PlanEstudios)->with('Grupos',$Grupos);
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
        $PrograExtendido = Reporte::find($id);
        $input = Input::all();
        $PrograExtendido->update($input);
        return  redirect('/PrograExtendido')->with('message','store');
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
        return redirect('/PrograExtendido')->with('message','store');
    }
}
