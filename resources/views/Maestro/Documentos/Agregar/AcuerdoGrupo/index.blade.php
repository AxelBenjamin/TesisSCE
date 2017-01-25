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

    {!! link_to_route('AcuerdoGrupo.create', 'Agregar Acuerdo de Grupo', null, array('class' => 'btn btn-default')); !!}
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Materia</th>
            <th>Grupo</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            
                <tr>
                    <td></td>
                    <td></td>

                    <td>{!! link_to('AgregarDocumentosM/Calificaciones/ActaCalificaciones', $title='Mostrar', $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to('AgregarDocumentosM/Calificaciones/ActaCalificaciones', $title='Editar', $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to('AgregarDocumentosM/Calificaciones/ActaCalificaciones', $title='Eliminar', $attributes = ['class' => 'btn btn-danger']) !!}
                    </td>

                </tr>
            
        </tbody>
    </table>


    </div>
@endsection