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

    <!--<div class="table-responsive">-->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Horarios de Clase</h4> </div>    
                </div>
            </div>        
        </div>
    </div>
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Semestre</th>
            <th colspan="2">Opciones</th>
        </thead>

        @foreach($Horarios as $Horario) 
  
        <tbody>
            <td>{{$Horario->semestres->nombre}}</td>

            <td><a href="/ImagenesUsuarios/53Octavo Semestre.pdf" target="_blank" class = 'btn btn-primary'>Ver Horario</a></td>                
            
        </tbody>
        @endforeach
    </table>


    </div>
@endsection