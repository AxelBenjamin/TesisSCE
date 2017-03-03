<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

//use App\Http\Requests;
use App\Semestre;
use App\CicloEscolar;

class Semestres extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /*public function __construct()
    {
        $this->middleware('adminAuth');
    }*/

    public function __construct()
    {
        $this->middleware('adminAuth');
    }
    
    public function index()
    {
        //Con el ::all los traigo todos de la tabla
        //$CiclosEscolares = \App\CicloEscolar::all();
        //$Semestres = \App\Semestre::all(); //trae todos los elementos de esa tabla
        //return view('Semestres.index',compact('Semestres','CiclosEscolares')); //Semestres es la variable
        $Semestres = Semestre::all()->sortBy("ciclo_escolars_id");
        return View::make('Admin.Semestres.index')->with('Semestres', $Semestres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //Muestro los datos de ciclos escolares en el semestre
        //$CiclosEscolares = \App\CicloEscolar2::all(); //trae todos los elementos de esa tabla
        //return view('Semestres.create',compact('CiclosEscolares')); //CiclosEscolares es la variable

        $CiclosEscolares = CicloEscolar::pluck('nombre', 'id');
        return view::make('Admin.Semestres.create')->with('CiclosEscolares',$CiclosEscolares);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd( $request );
        //$toInsert = new \App\Semestre();
        //$toInsert->nombre = $request->nombre;
        //$toInsert->ciclo_escolars_id = $request->ciclo_escolars_id;
        //$toInsert->save();
         // $request->input('name');
        // \App\Semestre::create($request);

        //
        // \App\Semestre::create([
        //     'nombre' => $request['nombre'],
        //     //Trato de introducir el id del ciclo escolar en el semestre
        //     'ciclo_escolars_id' => $request['ciclo_escolars_id'],
        //    ]);
        
        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        // return  redirect('/sem')->with('message','store');
        //dd($request);
        
        Semestre::create( $request->all() );
        return redirect('/sem')->with('message','store');
            
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
        $Semestre = Semestre::find($id);
        $CiclosEscolares = CicloEscolar::pluck('nombre','id');
        
        return view::make('Admin.Semestres.edit')->with('Semestre', $Semestre)->with('CiclosEscolares', $CiclosEscolares);
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
        $Semestre = Semestre::find($id);
        $input = Input::all();
        $Semestre->update($input);
        //return "Ciclo Escolar Editado Correctamente";
        //return Redirect::to('/ce');

        /*$CicloEscolar = \App\CicloEscolar::find($id);
        $CicloEscolar->fill($request->all());
        $CicloEscolar->save(); */

        //Al editar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/sem')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Semestre::destroy($id);

        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/sem')->with('message','store');
        //return Redirect::to('/ce');
    }

}
