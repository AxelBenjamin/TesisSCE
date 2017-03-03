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
use App\Visita;


use App\Http\Requests;

class CalendarioVisitantes extends Controller
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
        $Visitas = Visita::all()->sortBy("maestros_id");
        return View::make('Admin.Documentos.AgregarDoc.CalenVisi.index')->with("Visitas", $Visitas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        $Maestros = Maestro::all()->pluck("nombreCompleto","id");
        //$Temas = Tema::pluck('nombre','id');
        //$PlanesEstudios = PlanEstudios::pluck('nombre','id');
        return view::make('Admin.Documentos.AgregarDoc.CalenVisi.create')
        ->with('CiclosEscolares',$CiclosEscolares)->with('Maestros',$Maestros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Visita::create($request->all());
        return redirect ('/CalendarioVisi')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Visita = Visita::find($id);
        return View::make('Admin.Documentos.AgregarDoc.CalenVisi.show')->with('Visita',$Visita);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Visita = Visita::find($id);
        $CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        $Maestros = Maestro::all()->pluck("nombreCompleto","id");
        //$Temas = Tema::pluck('nombre','id');
        //$PlanesEstudios = PlanEstudios::pluck('nombre','id');
        return view::make('Admin.Documentos.AgregarDoc.CalenVisi.edit')->with('Visita',$Visita)->with('CiclosEscolares',$CiclosEscolares)->with('Maestros',$Maestros);
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
        $Visita = Visita::find($id);
        $input = Input::all();
        $Visita->update($input);
        return  redirect('/CalendarioVisi')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visita::destroy($id);
        return redirect('/CalendarioVisi')->with('message','store');
    }
}
