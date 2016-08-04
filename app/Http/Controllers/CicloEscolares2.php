<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

use App\Http\Requests;

class CicloEscolares2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view ('CicloEscolares2.index');
        $CiclosEscolares = \App\CicloEscolar2::all(); //trae todos los elementos de esa tabla
        return view('CicloEscolares2.index',compact('CiclosEscolares')); //CiclosEscolares es la variable
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('CicloEscolares2.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\CicloEscolar2::create([
            'nombre' => $request['nombre'],
            'fechaInicio' => $request['fechaInicio'],
            'fechaFinal' => $request['fechaFinal'],
            ]);
        
        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/ce')->with('message','store');
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
        $CicloEscolar = \App\CicloEscolar2::find($id);
        return view('CicloEscolares2.edit',['CicloEscolar'=>$CicloEscolar]);
    
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
        $CicloEscolar = \App\CicloEscolar2::find($id);
        $CicloEscolar->fill($request->all());
        $CicloEscolar->save();
        //return "Ciclo Escolar Editado Correctamente";
        //return Redirect::to('/ce');

        //Al editar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/ce')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\CicloEscolar2::destroy($id);

        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/ce')->with('message','store');
        //return Redirect::to('/ce');
    }
}
