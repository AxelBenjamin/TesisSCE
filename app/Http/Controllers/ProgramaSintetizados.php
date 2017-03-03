<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
//use App\Http\Requests;
//use App\Http\Requests;
use App\Materia;
use App\CicloEscolar;
use App\Maestro;
use App\Grupo;
use App\Unidad;
use App\Tema;
use App\Reporte;

class ProgramaSintetizados extends Controller
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
        $PrograSintetizados = Reporte::all()->where('tipo', 'ProgramaSintetizado')->sortBy("materias_id");
        $Unidades = Unidad::all();
        //$Grupos = Grupo::all();
        return View::make('Maestro.Documentos.Agregar.PrograSintetizado.index')->with("PrograSintetizados", $PrograSintetizados)->with("Unidades",$Unidades);
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
        $Grupos = Grupo::pluck('nombre', 'id');
        //$Alumnos = Alumno::all();
        return view::make('Maestro.Documentos.Agregar.PrograSintetizado.create')->with('Materias',$Materias)->with('Maestros',$Maestros)->with('CicloEscolares',$CicloEscolares)->with('Grupos',$Grupos);
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
        return redirect ('/PrograSintetizado')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $PrograSintetizado = Reporte::find($id);
        //$Unidades = Unidad::all();
        return View::make('Maestro.Documentos.Agregar.PrograSintetizado.show')->with('PrograSintetizado',$PrograSintetizado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PrograSintetizado = Reporte::find($id);
        $Materias = Materia::pluck('nombre', 'id');
        $Maestros = Maestro::all()->pluck("nombreCompleto","id");
        $CicloEscolares = CicloEscolar::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre', 'id');
        //$Alumnos = Alumno::all();
        return view::make('Maestro.Documentos.Agregar.PrograSintetizado.edit')->with('PrograSintetizado',$PrograSintetizado)->with('Materias',$Materias)->with('Maestros',$Maestros)->with('CicloEscolares',$CicloEscolares)->with('Grupos',$Grupos);
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
        $PrograSintetizado = Reporte::find($id);
        $input = Input::all();
        $PrograSintetizado->update($input);
        return  redirect('/PrograSintetizado')->with('message','store');
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
        return redirect('/PrograSintetizado')->with('message','store');
    }
}
