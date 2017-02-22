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
            <th>Semestre</th>
            <th colspan="4">Opciones</th>
        </thead>

        <tbody>
            @foreach($CalendarioExamenes as $CalendarioExamen)
                <tr>
                    
                    <td>{{$CalendarioExamen->semestres->nombre}}</td>
                    <td>{{$CalendarioExamen->tipo}}</td>

                    <td>{!! link_to_route('CalendarioExamenes.show', $title='Mostrar', $parameters=$CalendarioExamen->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to_route('CalendarioExamenes.edit', $title='Editar', $parameters=$CalendarioExamen->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <th>{!! Form::open(['route' => ['CalendarioExamenes.destroy', $CalendarioExamen->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!} </th>


                </tr>
            @endforeach
            
        </tbody>
    </table>


    </div>
@endsection