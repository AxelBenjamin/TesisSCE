<?php
    $mensaje = Session::get('message')
?>

@extends('Maestro.layouts.master')
    
@section('contentMaestro')

@include('Maestro.layouts.partials.menuGD')  

    @if($mensaje == 'store')
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Acción realizada con exito</p>
        </div>
    @endif

    <!--<div class="table-responsive">-->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Cartas de Asignación</h4> </div>    
                </div>
            </div>        
        </div>
    </div>
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Maestro</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($CartaAsignaciones as $CartaAsignacion)
                <tr>
                    <td>
                    {{$CartaAsignacion->maestros->apa}}
                    {{$CartaAsignacion->maestros->ama}}
                    {{$CartaAsignacion->maestros->nombre}}</td>

                    <th>{!!link_to_action('CartaAsignacionesM@crear_carta_asignacion', $title = 'Ver Carta', $parameters = array('1' , $CartaAsignacion->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                    <th>{!!link_to_action('CartaAsignacionesM@crear_carta_asignacion', $title = 'Descargar Carta', $parameters = array('2' , $CartaAsignacion->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection