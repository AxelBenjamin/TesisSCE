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
            @foreach($Acuerdos as $Acuerdo)
                <tr>
                    
                    <td>{{$Acuerdo->materias->nombre}}</td>
                    <td>{{$Acuerdo->grupos->nombre}}</td>

                    <td>{!! link_to_route('AcuerdoGrupo.show', $title='Mostrar', $parameters=$Acuerdo->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to('AgregarDocumentosM/Calificaciones/ActaCalificaciones', $title='Editar', $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! Form::open(['route' => ['AcuerdoGrupo.destroy', $Acuerdo->id], 'method'=>'DELETE'])!!}
                        {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!} 
                    {!! Form::close() !!} </td>

                    <th>{!!link_to_action('Acuerdos@crear_acuerdo_grupo', $title = 'Ver Acuerdo', $parameters = array('1' , $Acuerdo->id), $attributes = ['class'=>'btn btn-primary'])!!}</th>

                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection