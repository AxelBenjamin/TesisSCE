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

class Alumnos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //Solo se puede acceder a este controlador si se esta logeado y si es admin
    public function __construct()
    {
        $this->middleware('adminAuth');
    }

    public function index()
    {
        /*$Alumnos = Alumno::all()->sortBy("grupos_id")->sortBy("reportes_id");
        return View::make('Admin.Alumnos.index')->with('Alumnos', $Alumnos);*/

        $Alumnos = Alumno::orderBy('apa')->get()->sortBy("grupos_id")->sortBy("reportes_id");
        return View::make('Admin.Alumnos.index')->with('Alumnos', $Alumnos);

        /*$HomeBanners = HomeBanner::all()->orderBy('ordering', 'asc'); 
        return view('home', compact('HomeBanners'));*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Grupos = Grupo::pluck('nombre', 'id');
        return view::make('Admin.Alumnos.create')->with('Grupos',$Grupos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alumno::create( $request->all() );
        return redirect('/alu')->with('message','store');
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
        return View::make('Admin.Alumnos.show')->with('Alumno', $Alumno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Alumno = Alumno::find($id);
        $Grupos = Grupo::pluck('nombre','id');

        return View::make('Admin.Alumnos.edit')->with("Alumno", $Alumno)->with('Grupos', $Grupos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $Alumno = Alumno::find($id);
        $input = Input::all();
        $Alumno->update($input);
        return  redirect('/alu')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        return  redirect('/alu')->with('message','store');
    }
}
