<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

//use App\Http\Requests;

use App\Grupo;
use App\Alumno;
use App\CicloEscolar;
use App\Reporte;

class ListaAlumnos extends Controller
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
        $ListaAlumnos = Reporte::all()->where('tipo', 'ListaAlu')->sortBy("grupos_id");
        return View::make('Admin.Documentos.AgregarDoc.ListaAlu.index')->with("ListaAlumnos", $ListaAlumnos);
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

        
        
        //return $pdf->stream('Lista_Alumnos');
        if($tipo==1){return $pdf->stream('Lista_Alumnos');}
        if($tipo==2){return $pdf->download('Lista_Alumnos.pdf'); }

        
    }

    
    public function crear_lista_alumnos($tipo, $id){

     $ListaAlumno = Reporte::find($id);
     $vistaurl="Maestro.Documentos.Ver.ListaAlumnos.show";
     
     return $this->crearPDF($ListaAlumno, $vistaurl, $tipo, $id);

    }

    public function create()
    {
        $Grupos = Grupo::pluck('nombre','id');
        $CicloEscolars = CicloEscolar::pluck('nombre','id');

        return view::make('Admin.Documentos.AgregarDoc.ListaAlu.create')->with('Grupos',$Grupos)->with('CicloEscolars',$CicloEscolars);
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
        return redirect ('/ListaAlumnos')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ListaAlumno = Reporte::find($id);
        return View::make('Admin.Documentos.AgregarDoc.ListaAlu.show')->with('ListaAlumno', $ListaAlumno);
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
        return redirect('/ListaAlumnos')->with('message','store');
    }
}
