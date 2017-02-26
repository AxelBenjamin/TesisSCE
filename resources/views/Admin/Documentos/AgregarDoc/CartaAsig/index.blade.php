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

    {!! link_to_route('CartaAsignacion.create', 'Agregar Carta de Asignación', null, array('class' => 'btn btn-default')); !!}
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Maestro</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($CartaAsignaciones as $CartaAsignacion)
                <tr>
                    <td>{{$CartaAsignacion->maestros->apa}}
                    {{$CartaAsignacion->maestros->ama}}
                    {{$CartaAsignacion->maestros->nombre}}</td>

                    <td>{!! link_to_route('CartaAsignacion.show', $title='Mostrar', $parameters=$CartaAsignacion->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to_route('CartaAsignacion.edit', $title='Editar', $parameters=$CartaAsignacion->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <th>{!! Form::open(['route' => ['CartaAsignacion.destroy', $CartaAsignacion->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!} </th>


                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection