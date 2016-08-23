<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Semestres extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Semestres = \App\Semestre::all(); //trae todos los elementos de esa tabla
        return view('Semestres.index',compact('Semestres')); //CiclosEscolares es la variable
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view ('Semestres.create');
        
        //Muestro los datos de ciclos escolares en el semestre
        //$CiclosEscolares = \App\CicloEscolar2::all(); //trae todos los elementos de esa tabla
        //return view('Semestres.create',compact('CiclosEscolares')); //CiclosEscolares es la variable

        $CiclosEscolares = \App\CicloEscolar2::pluck('nombre', 'id');
        return view('Semestres.create', compact('CiclosEscolares'));
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
        \App\Semestre::create([
            'nombre' => $request['nombre'],
            //Trato de introducir el id del ciclo escolar en el semestre
            'ciclo_escolars_id' => $request['ciclo_escolars_id'],
           ]);
        
        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/sem')->with('message','store');
        //dd($request);
            
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
