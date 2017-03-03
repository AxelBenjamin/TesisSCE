<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
//use App\Http\Requests;
use App\Alumno;
use App\Grupo;
use App\Reporte;

class Boletas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //Solo se puede acceder a este controlador si se esta logeado y si es admin
    /*public function __construct()
    {
        $this->middleware('alumnoAuth');
    }*/

    public function index()
    {
        $Alumnos = Alumno::orderBy('apa')->get()->sortBy("grupos_id");
        return View::make('Alumno.Documentos.BoletaCalificaciones.index')->with('Alumnos', $Alumnos);
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
        if($tipo==1){return $pdf->stream('Boleta');}
        if($tipo==2){return $pdf->download('Boleta.pdf'); }        
    }

    
    public function crear_boletas($tipo, $id)
    {
        $Alumno = Alumno::find($id);
        $vistaurl="Alumno.Documentos.BoletaCalificaciones.show2";
     
        return $this->crearPDF($Alumno, $vistaurl, $tipo, $id);
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
        $Alumno = Alumno::find($id);
        return View::make('Alumno.Documentos.BoletaCalificaciones.show')->with('Alumno', $Alumno);
    }

    public function show2($id)
    {
        $Alumno = Alumno::find($id);
        return View::make('Alumno.Documentos.BoletaCalificaciones.show2')->with('Alumno', $Alumno);
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
