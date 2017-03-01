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

class ProgramaExtendidosAd extends Controller
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
        $PrograExtendidos = Reporte::all()->where('tipo', 'ProgramaExtendido')->sortBy("materias_id");
        //$Grupos = Grupo::all();
        return View::make('Admin.Documentos.VerDoc.ProgramaExtendido.index')->with("PrograExtendidos", $PrograExtendidos);//->with("Grupos", $Grupos);
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
        $pdf->setPaper('A4', 'landscape');
        //return $pdf->stream('Lista_Alumnos');
        if($tipo==1){return $pdf->stream('Programa_Extendido');}
        if($tipo==2){return $pdf->download('Programa_Extendido.pdf'); }        
    }

    
    public function crear_programa_extendido($tipo, $id)
    {
        $PrograExtendido = Reporte::find($id);
        $vistaurl="Admin.Documentos.VerDoc.ProgramaExtendido.show";
     
        return $this->crearPDF($PrograExtendido, $vistaurl, $tipo, $id);
    }

//TERMINA Función para crear PDF

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
