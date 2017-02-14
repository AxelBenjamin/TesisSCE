<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

use App\CicloEscolar;
use App\PlanEstudios;
use App\Grupo;
use App\Semestre;
use App\Materia;
use App\Reporte;

class CalendarioExamenes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$CalendarioExamenes = Reporte::all()->sortBy("plan_estudios_id");
        return View::make('Admin.Documentos.AgregarDoc.CalenExam.index')->with("CalendarioExamenes",$CalendarioExamenes);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        $PlanesEstudios = PlanEstudios::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre','id');
        $Semestres = Semestre::pluck('nombre','id');
        //$Temas = Tema::pluck('nombre','id');
        //$PlanesEstudios = PlanEstudios::pluck('nombre','id');
        return view::make('Admin.Documentos.AgregarDoc.CalenExam.create')
        ->with('CiclosEscolares',$CiclosEscolares)->with('PlanesEstudios',$PlanesEstudios)->with('Grupos',$Grupos)->with('Semestres',$Semestres);/*->with('Temas',$Temas)->with('PlanesEstudios',$PlanesEstudios)*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Reporte::create($request->all());
        return redirect ('/CalendarioExamenes')->with('message','store');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
