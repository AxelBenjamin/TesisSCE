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
        $CalendarioExamenes = Reporte::all()->where('tipo', 'Calendario')->sortBy('semestres_id');
        return View::make('Admin.Documentos.AgregarDoc.CalenExam.index')->with("CalendarioExamenes",$CalendarioExamenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //INDEX PARA QUE EL MAESTRO VEA PDF
    public function indexMaestro()
    {
        $CalendarioExamenes = Reporte::all()->where('tipo', 'Calendario')->sortBy("semestres_id");
        //$Grupos = Grupo::all();
        return View::make('Maestro.Documentos.Ver.CalendarioExamenes.index')->with("CalendarioExamenes", $CalendarioExamenes);//->with("Grupos", $Grupos);
    }

    public function indexAlumno()
    {
        $CalendarioExamenes = Reporte::all()->where('tipo', 'Calendario')->sortBy("semestres_id");
        //$Grupos = Grupo::all();
        return View::make('Alumno.Documentos.CalendarioExamenes.index')->with("CalendarioExamenes", $CalendarioExamenes);//->with("Grupos", $Grupos);
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
        if($tipo==1){return $pdf->stream('Calendario_Examenes');}
        if($tipo==2){return $pdf->download('Calendario_Examenes.pdf'); }        
    }

    
    public function crear_calendario_examenes($tipo, $id)
    {
        $CalendarioExamen = Reporte::find($id);
        $vistaurl="Maestro.Documentos.Ver.CalendarioExamenes.show";
     
        return $this->crearPDF($CalendarioExamen, $vistaurl, $tipo, $id);
    }

//TERMINA Función para crear PDF 
//
    public function create()
    {
        $CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre','id');
        $PlanesEstudios = PlanEstudios::pluck('nombre', 'id');
        $Semestres = Semestre::pluck('nombre','id');
        //$Temas = Tema::pluck('nombre','id');
        //$PlanesEstudios = PlanEstudios::pluck('nombre','id');
        return view::make('Admin.Documentos.AgregarDoc.CalenExam.create')
        ->with('CiclosEscolares',$CiclosEscolares)->with('Grupos',$Grupos)->with('PlanesEstudios',$PlanesEstudios)->with('Semestres',$Semestres);/*->with('Temas',$Temas)->with('PlanesEstudios',$PlanesEstudios)*/
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
        return redirect ('/CalendarioExamenes')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $CalendarioExamen = Reporte::find($id);
        return View::make('Admin.Documentos.AgregarDoc.CalenExam.show')->with('CalendarioExamen',$CalendarioExamen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $CalendarioExamen = Reporte::find($id);
        $CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        $Grupos = Grupo::pluck('nombre','id');
        $PlanesEstudios = PlanEstudios::pluck('nombre', 'id');
        $Semestres = Semestre::pluck('nombre','id');

        return view::make('Admin.Documentos.AgregarDoc.CalenExam.edit')->with('CalendarioExamen',$CalendarioExamen)->with('CiclosEscolares',$CiclosEscolares)->with('Grupos',$Grupos)->with('PlanesEstudios',$PlanesEstudios)->with('Semestres',$Semestres);
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
        $CalendarioExamen = Reporte::find($id);
        $input = Input::all();
        $CalendarioExamen->update($input);
        return  redirect('/CalendarioExamenes')->with('message','store');
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
        return redirect('/CalendarioExamenes')->with('message','store');
    }
}
