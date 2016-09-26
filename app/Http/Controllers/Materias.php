<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

//use App\Http\Requests;

use App\Semestre;
use App\Maestro;
use App\Materia;


class Materias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Materias = Materia::all()->sortBy("semestres_id");
        $Materias = Materia::all()->sortBy("maestros_id");
        return View::make('Materias.index')->with('Materias',$Materias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Semestres = Semestre::pluck('nombre', 'id');
        $Maestros = Maestro::pluck('apa','id');
        return View::make('Materias.create')->with('Semestres',$Semestres)->with('Maestros',$Maestros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Materia::create( $request->all() );
        return redirect('/mat')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Materia = Materia::find($id);
        return View::make('Materias.show')->with("Materia", $Materia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Materia = Materia::find($id);
        $Semestres = Semestre::pluck('nombre', 'id');
        $Maestros = Maestro::pluck('apa','id');

        return View::make('Materias.edit')->with("Materia", $Materia)->with('Semestres', $Semestres)->with("Maestros",$Maestros);
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
        $Materia = Materia::find($id);
        $input = Input::all();
        $Materia->update($input);
        return  redirect('/mat')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Materia::destroy($id);
        return  redirect('/mat')->with('message','store');
    }
}
