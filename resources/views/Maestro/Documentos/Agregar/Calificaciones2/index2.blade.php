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

    <!--<div class="table-responsive">-->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Calificaciones por Materia</h4> </div>    
                </div>
            </div>        
        </div>
    </div>
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Materias</th>
            <th>Grupos</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($Materias as $Materia)
                <tr>
                    
                    <td>{{$Materia->nombre}}</td>
                    
                    <td>{!! link_to_route('Calificaciones2.show', $title='Mostrar', $parameters=$Materia->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                </tr>
            @endforeach
            
        </tbody>

        
    </table>


    </div>
@endsection