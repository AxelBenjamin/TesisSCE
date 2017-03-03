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

class CalendarioVisitantesM extends Controller
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
        $Visitas = Visita::all()->sortBy("maestros_id");
        return View::make('Maestro.Documentos.Ver.CalendarioVisitantes.index')->with("Visitas", $Visitas);
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
        if($tipo==1){return $pdf->stream('Calendario_Visitantes');}
        if($tipo==2){return $pdf->download('Calendario_Visitantes.pdf'); }        
    }

    
    public function crear_calendario_visitantes($tipo, $id)
    {
        $Visita = Visita::find($id);
        $vistaurl="Maestro.Documentos.Ver.CalendarioVisitantes.show";
     
        return $this->crearPDF($Visita, $vistaurl, $tipo, $id);
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
        $Maestro = Maestro::find($id);
        $Reporte = Reporte::all();
        return View::make('Maestro.Documentos.Ver.CalendarioVisitantes.show')->with('Maestro',$Maestro);
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
