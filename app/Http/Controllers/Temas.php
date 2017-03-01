<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

use App\Tema;
use App\Unidad;

class Temas extends Controller
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
        $Temas = Tema::all()->sortBy("unidads_id");
        return View::make('Admin.Temas.index')->with('Temas', $Temas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Unidades = Unidad::pluck('nombre', 'id');
        return view::make('Admin.Temas.create')->with('Unidades',$Unidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tema::create( $request->all() );
        return redirect('/tem')->with('message','store');
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
        $Tema = Tema::find($id);
        $Unidades = Unidad::pluck('nombre','id');
        
        return view::make('Admin.Temas.edit')->with('Tema', $Tema)->with('Unidades', $Unidades);
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
        $Tema = Tema::find($id);
        $input = Input::all();
        $Tema->update($input);
        return  redirect('/tem')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tema::destroy($id);
        return  redirect('/tem')->with('message','store');
    }
}
