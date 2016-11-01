<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

//use App\Http\Requests;
use App\Unidad;
use App\Materia;

class Unidades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Unidades = Unidad::all()->sortBy("materias_id");
        return View::make('Admin.Unidades.index')->with('Unidades', $Unidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Materias = Materia::pluck('nombre', 'id');
        return view::make('Admin.Unidades.create')->with('Materias',$Materias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Unidad::create( $request->all() );
        return redirect('/uni')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Unidad = Unidad::find($id);
        return View::make('Admin.Unidades.show')->with('Unidad', $Unidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Unidad = Unidad::find($id);
        $Materias = Materia::pluck('nombre','id');
        
        return view::make('Admin.Unidades.edit')->with('Unidad', $Unidad)->with('Materias', $Materias);
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
        $Unidad = Unidad::find($id);
        $input = Input::all();
        $Unidad->update($input);
        return  redirect('/uni')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unidad::destroy($id);
        return  redirect('/uni')->with('message','store');
    }
}
