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
    public function index()
    {
        $CartaAsignaciones = Reporte::all()->where('tipo', 'CartaAsig')->sortBy("maestros_id");
        return View::make('Admin.Documentos.AgregarDoc.CartaAsig.index')->with("CartaAsignaciones", $CartaAsignaciones);
    }

    //INDEX PARA QUE EL MAESTRO VEA PDF
    public function indexMaestro()
    {
        $CartaAsignaciones = Reporte::all()->where('tipo', 'CartaAsig')->sortBy("semestres_id")->sortBy("maestros_id");
        //$Grupos = Grupo::all();
        return View::make('Maestro.Documentos.Ver.CartaAsignacion.index')->with("CartaAsignaciones", $CartaAsignaciones);//->with("Grupos", $Grupos);
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
        if($tipo==1){return $pdf->stream('Carta_Asignacion');}
        if($tipo==2){return $pdf->download('Carta_Asignacion.pdf'); }        
    }

    
    public function crear_carta_asignacion($tipo, $id)
    {
        $CartaAsignacion = Reporte::find($id);
        $vistaurl="Maestro.Documentos.Ver.CartaAsignacion.show";
     
        return $this->crearPDF($CartaAsignacion, $vistaurl, $tipo, $id);
    }

//TERMINA Función para crear PDF 

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
