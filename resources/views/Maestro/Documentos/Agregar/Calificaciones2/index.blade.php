<?php
    $mensaje = Session::get('message')
?>

@extends('Maestro.layouts.master')
    
@section('contentMaestro')

    @if($mensaje == 'store')
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <p>Acción realizada con exito</p>
        </div>
    @endif

    <!--Este index muestra las calificaciones por alumno-->

    <!--<div class="table-responsive">-->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    {!! link_to_route('Calificaciones2.create', 'Agregar Calificación', null, array('class' => 'btn btn-default')); !!}

                    {!! link_to_action('Calificaciones2@index2', 'Ver Calificaciones por Materia', null, array('class' => 'btn btn-default')); !!}
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Calificaciones</h4> </div>    
                </div>
            </div>        
        </div>
    </div>

    <table class="table table-stripped table-hover">
        <thead>
            <th>Materias</th>
            <th colspan="2">Alumnos</th>
        </thead>

        <tbody>
            @foreach($Calificaciones2 as $Calificacion2)
                <tr>
                    
                    <td>{{$Calificacion2->materias->nombre}}</td>
                    <td>{{$Calificacion2->alumnos->apa}}
                    {{$Calificacion2->alumnos->ama}}
                    {{$Calificacion2->alumnos->nombre}}</td>

                    <td>{!!link_to_action('Calificaciones2@show2', $title = 'Mostrar Calificaciones', $parameters = $Calificacion2->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>

                </tr>
            @endforeach
            
        </tbody>

        
    </table>


    </div>
@endsection