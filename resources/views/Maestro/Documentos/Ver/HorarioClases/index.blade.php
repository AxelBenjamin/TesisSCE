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