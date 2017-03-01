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

    <div class="table-responsive">
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Grupo</th>
            <th colspan="2">Opciones</th>
        </thead>

        @foreach($ListaAlumnos as $ListaAlumno) 
  
        <tbody>
            <th> {{$ListaAlumno->grupos->nombre}} </th>

            <th>{!!link_to_action('ListaAlumnosM@crear_lista_alumnos', $title = 'Ver Lista', $parameters = array('1' , $ListaAlumno->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

            <th>{!!link_to_action('ListaAlumnosM@crear_lista_alumnos', $title = 'Descargar Lista', $parameters = array('2' , $ListaAlumno->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>
                
            
        </tbody>
        @endforeach
    </table>


    </div>
@endsection