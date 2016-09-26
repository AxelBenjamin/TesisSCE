<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
//use App\Http\Requests;
use App\PlanEstudios;

class PlanesEstudios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PlanesEstudios = PlanEstudios::all();
        return View::make('PlanEstudios.index')->with("PlanesEstudios", $PlanesEstudios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make ('PlanEstudios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PlanEstudios::create( $request -> all() );
        return  redirect('/plan')->with('message','store');
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
        $PlanEstudios = PlanEstudios::find($id);
        return View::make('PlanEstudios.edit')->with("PlanEstudios",$PlanEstudios);
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
        $PlanEstudios = PlanEstudios::find($id);
        
        $input = Input::all();
        $PlanEstudios->update($input);

        return redirect('/plan')->with('message','store');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PlanEstudios::destroy($id);

        //Al agregar los datos, se redirecciona a la carpeta ciclosescolares2 con un mensaje
        return  redirect('/plan')->with('message','store');
        //return Redirect::to('/ce');
    }
}
