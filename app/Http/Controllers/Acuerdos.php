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
        $Acuerdos = Reporte::all()->where('tipo', 'Acuerdo')->sortBy("materias_id");
        //$Grupos = Grupo::all();
        return View::make('Maestro.Documentos.Agregar.AcuerdoGrupo.index')->with("Acuerdos", $Acuerdos);//->with("Grupos", $Grupos);
    }

//INDEX PARA QUE EL ADMIN VEA PDF
    public function indexAdmin()
    {
        $Acuerdos = Reporte::all()->sortBy("materias_id");
        //$Grupos = Grupo::all();
        return View::make('Admin.Documentos.VerDoc.AcuerdoGrupo.index')->with("Acuerdos", $Acuerdos);//->with("Grupos", $Grupos);
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
//INICIA Función para crear PDF 
    public function crearPDF($datos,$vistaurl,$tipo, $id)
    {
        $data = $datos;
        //$date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        // (Optional) Setup the paper size and orientation
        //$pdf->setPaper('A4', 'landscape');
        
        //return $pdf->stream('Lista_Alumnos');
        if($tipo==1){return $pdf->stream('Acuerdo_Grupo');}
        if($tipo==2){return $pdf->download('Acuerdo_Grupo.pdf'); }        
    }

    
    public function crear_acuerdo_grupo($tipo, $id)
    {
        $Acuerdo = Reporte::find($id);
        $vistaurl="Admin.Documentos.VerDoc.AcuerdoGrupo.show";
     
        return $this->crearPDF($Acuerdo, $vistaurl, $tipo, $id);
    }

//TERMINA Función para crear PDF 

    
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
