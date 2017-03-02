<?php
    $mensaje = Session::get('message')
?>

@extends('Admin.layouts.master')
    
@section('content2')

@include('Admin.layouts.partials.menuGD')  

    @if($mensaje == 'store')
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Acción realizada con exito</p>
        </div>
    @endif

    <div class="table-responsive">

    <h4>Programas Extendidos</h4>

    <table class="table table-stripped table-hover">
        <thead>
            <th>Materia</th>
            <th>Fecha Elaboración</th>
            <th colspan="4">Opciones</th>
        </thead>

        <tbody>
            
            @foreach($PrograExtendidos as $PrograExtendido)
                <tr>
                    
                    <td>{{$PrograExtendido->materias->nombre}}</td>
                    <td>{{$PrograExtendido->fechaelaboracion}}</td>

                    <th>{!!link_to_action('ProgramaExtendidosAd@crear_programa_extendido', $title = 'Ver Programa Extendido', $parameters = array('1' , $PrograExtendido->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                    <th>{!!link_to_action('ProgramaExtendidosAd@crear_programa_extendido', $title = 'Descargar Programa Extendido', $parameters = array('2' , $PrograExtendido->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                </tr>
            @endforeach
        </tbody>
    </table>


    </div>
@endsection