<?php
    $mensaje = Session::get('message')
?>

@extends('Alumno.layouts.master')
    
@section('contentAlumno') 

    @if($mensaje == 'store')
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Acción realizada con exito</p>
        </div>
    @endif

    <div class="table-responsive">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Acuerdos de Grupo</h4> </div>    
                </div>
            </div>        
        </div>
    </div>
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Materia</th>
            <th>Grupo</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($Acuerdos as $Acuerdo)
                <tr>
                    
                    <td>{{$Acuerdo->materias->nombre}}</td>
                    <td>{{$Acuerdo->grupos->nombre}}</td>

                    <th>{!!link_to_action('AcuerdosAlu@crear_acuerdo_grupo', $title = 'Ver Acuerdo', $parameters = array('1' , $Acuerdo->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                    <th>{!!link_to_action('AcuerdosAlu@crear_acuerdo_grupo', $title = 'Descargar Acuerdo', $parameters = array('2' , $Acuerdo->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection