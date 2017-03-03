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

class ProgramaSintetizadosAd extends Controller
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
        $PrograSintetizados = Reporte::all()->where('tipo', 'ProgramaSintetizado')->sortBy("materias_id");
        return View::make('Admin.Documentos.VerDoc.ProgramaSintetizado.index')->with("PrograSintetizados", $PrograSintetizados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
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
        if($tipo==1){return $pdf->stream('Programa_Sintetizado');}
        if($tipo==2){return $pdf->download('Programa_Sintetizado.pdf'); }        
    }

    
    public function crear_programa_sintetizado($tipo, $id)
    {
        $PrograSintetizado = Reporte::find($id);
        $vistaurl="Admin.Documentos.VerDoc.ProgramaSintetizado.show";
     
        return $this->crearPDF($PrograSintetizado, $vistaurl, $tipo, $id);
    }

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
