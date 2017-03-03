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

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    {!! link_to_route('PrograSintetizado.create', 'Agregar Programa Sintetizado', null, array('class' => 'btn btn-default')); !!}
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div align="right"> <h4>Programas Sintetizados</h4> </div>    
                </div>
            </div>        
        </div>
    </div>
    
    
    <table class="table table-stripped table-hover">
        <thead>
            <th>Materia</th>
            <th>Grupo</th>
            <th colspan="3">Opciones</th>
        </thead>

        <tbody>
            @foreach($PrograSintetizados as $PrograSintetizado)
                <tr>
                    <td>{{$PrograSintetizado->materias->nombre}}</td>
                    <td>{{$PrograSintetizado->grupos->nombre}}</td>

                    <td>{!! link_to_route('PrograSintetizado.show', $title='Mostrar', $parameters=$PrograSintetizado->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to_route('PrograSintetizado.edit', $title='Editar', $parameters=$PrograSintetizado->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! Form::open(['route' => ['PrograSintetizado.destroy', $PrograSintetizado->id], 'method'=>'DELETE'])!!}
                        {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!} 
                    {!! Form::close() !!} </td>

                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection