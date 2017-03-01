<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
//use App\Http\Requests;
//use App\Http\Requests;
use App\Maestro;
use App\Grupo;
use App\Materia;
use App\Semestre;
use App\Reporte;

use App\Http\Requests;

class CartaAsignaciones extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('adminAuth');
    }

    public function index()
    {
        $CartaAsignaciones = Reporte::all()->where('tipo', 'CartaAsig')->sortBy("maestros_id");
        return View::make('Admin.Documentos.AgregarDoc.CartaAsig.index')->with("CartaAsignaciones", $CartaAsignaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    public function create()
    {
        $Maestros = Maestro::all()->pluck("nombreCompleto","id");
        $Grupos = Grupo::pluck('nombre','id');
        $Semestres = Semestre::pluck('nombre','id');
        //$Temas = Tema::pluck('nombre','id');
        //$PlanesEstudios = PlanEstudios::pluck('nombre','id');
        return view::make('Admin.Documentos.AgregarDoc.CartaAsig.create')
        ->with('Maestros',$Maestros)->with('Grupos',$Grupos)->with('Semestres',$Semestres);
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
        return redirect ('/CartaAsignacion')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $CartaAsignacion = Reporte::find($id);
        return View::make('Admin.Documentos.AgregarDoc.CartaAsig.show')->with('CartaAsignacion',$CartaAsignacion);
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
        return redirect('/CartaAsignacion')->with('message','store');
    }
}
