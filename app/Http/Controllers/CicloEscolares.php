<?php namespace App\Http\Controllers;

//namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
//use App\Http\Requests;
use App\CicloEscolar;
=======

//use App\Http\Requests;
use App\CicloEscolar;

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
class CicloEscolares extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view ('CicloEscolares2.index');
        //$CiclosEscolares = \App\CicloEscolar::all(); //trae todos los elementos de esa tabla
        //return view('CicloEscolares.index',compact('CiclosEscolares')); //CiclosEscolares es la variable
        
        $CiclosEscolares = CicloEscolar::all();
        return View::make('CicloEscolares.index')->with("CiclosEscolares", $CiclosEscolares);
    }
<<<<<<< HEAD
=======

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make ('CicloEscolares.create');
    }
<<<<<<< HEAD
=======

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //\App\CicloEscolar::create([
        //    'nombre' => $request['nombre'],
        //    'fechaInicio' => $request['fechaInicio'],
        //    'fechaFinal' => $request['fechaFinal'],
         //   ]);
        
        CicloEscolar::create( $request -> all() );
<<<<<<< HEAD
        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/ce')->with('message','store');
    }
=======

        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/ce')->with('message','store');
    }

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
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
<<<<<<< HEAD
=======

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $CicloEscolar = CicloEscolar::find($id);
        //return view('CicloEscolares.edit',['CicloEscolar'=>$CicloEscolar]);
        return View::make('CicloEscolares.edit')->with("CicloEscolar", $CicloEscolar);
    
    }
<<<<<<< HEAD
=======

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $CicloEscolar = CicloEscolar::find($id);
        //$CicloEscolar->fill($request->all());
        //$CicloEscolar->save();
        $input = Input::all();
        $CicloEscolar->update( $input );
        
        //Al editar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/ce')->with('message','store');
    }
<<<<<<< HEAD
=======

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CicloEscolar::destroy($id);
<<<<<<< HEAD
=======

>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/ce')->with('message','store');
        //return Redirect::to('/ce');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> f5cd582b1a36933a7742b0b00b8945b5accf28cf
