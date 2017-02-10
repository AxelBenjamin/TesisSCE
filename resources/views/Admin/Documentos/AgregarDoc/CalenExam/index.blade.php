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

    {!! link_to_route('CalendarioExamenes.create', 'Agregar Calendario de Examenes', null, array('class' => 'btn btn-default')); !!}
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Materia</th>
            <th>Grupo</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($CalendarioExamenes as $CalendarioExamen)
                <tr>
                    
                    <td>{{$CalendarioExamen->planes_estudios->nombre}}</td>

                    <td>{!! link_to_route('AcuerdoGrupo.show', $title='Mostrar', $parameters=$CalendarioExamen->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to('AgregarDocumentosM/Calificaciones/ActaCalificaciones', $title='Editar', $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>


                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection