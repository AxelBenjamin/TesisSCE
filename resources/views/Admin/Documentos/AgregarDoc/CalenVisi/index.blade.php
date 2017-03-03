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

    <!--<div class="table-responsive">-->

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    {!! link_to_route('CalendarioVisi.create', 'Agregar Fechas de Visita', null, array('class' => 'btn btn-default')); !!}
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Calendarios de Visitantes</h4> </div>    
                </div>
            </div>        
        </div>
    </div>
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Maestro</th>
            <th>Mes</th>
            <th colspan="4">Opciones</th>
        </thead>

        <tbody>
            @foreach($Visitas as $Visita)
                <tr>
                    
                    <td>{{$Visita->maestros->apa}}
                    {{$Visita->maestros->ama}}
                    {{$Visita->maestros->nombre}}</td>
                    <td>{{$Visita->cvmes}}</td>

                    <td>{!! link_to_route('CalendarioVisi.show', $title='Mostrar', $parameters=$Visita->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to_route('CalendarioVisi.edit', $title='Editar', $parameters=$Visita->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <th>{!! Form::open(['route' => ['CalendarioVisi.destroy', $Visita->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!} </th>

                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection