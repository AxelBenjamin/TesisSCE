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
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($CalendarioExamenes as $CalendarioExamen)
                <tr>
                    
                    <td>{{$CalendarioExamen->semestres->nombre}}</td>

                    <th>{!!link_to_action('CalendarioExamenesM@crear_calendario_examenes', $title = 'Ver Calendario', $parameters = array('1' , $CalendarioExamen->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                    <th>{!!link_to_action('CalendarioExamenesM@crear_calendario_examenes', $title = 'Descargar Calendario', $parameters = array('2' , $CalendarioExamen->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection