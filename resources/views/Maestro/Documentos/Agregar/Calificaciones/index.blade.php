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

    <div class="table-responsive">
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Materias</th>
            <th>Grupos</th>
            <th>Alumnos</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($Calificaciones as $Calificacion)
                <tr>
                    
                    <td>{{$Calificacion->materias->nombre}}</td>

                    <td>{!! link_to_action('CalificacionesFaltas@mostrar', $title='Mostrar Calificaciones', $parameters=$Calificacion->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                </tr>
            @endforeach
            
        </tbody>

        
    </table>


    </div>
@endsection