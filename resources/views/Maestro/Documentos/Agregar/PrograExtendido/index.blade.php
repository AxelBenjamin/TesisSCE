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

    {!! link_to_route('PrograExtendido.create', 'Agregar Programa Extendido', null, array('class' => 'btn btn-default')); !!}
    
    <h3>Unidades</h3>
    <table class="table table-stripped table-hover">
        <thead>
            <th>Unidad</th>
            <th>Materias</th>
            <th colspan="5">Opciones</th>
        </thead>

        <tbody>
            
            @foreach($Unidades as $Unidad)
                <tr>
                    <td>{{$Unidad->nombre}}</td>
                    <td>{{$Unidad->materias->nombre}}</td>

                    <td>{!!link_to_action('PSEunidades@edit', $title = 'Agregar datos', $parameters = $Unidad->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>

                    <td>{!!link_to_route('uni.show', $title = 'Mostrar', $parameters = $Unidad->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Programas Extendidos</h3>
    <table class="table table-stripped table-hover">
        <thead>
            <th>Materia</th>
            <th>Fecha Elaboración</th>
            <th colspan="4">Opciones</th>
        </thead>

        <tbody>
            
            @foreach($PrograExtendidos as $PrograExtendido)
                <tr>
                    
                    <td>{{$PrograExtendido->materias->nombre}}</td>
                    <td>{{$PrograExtendido->fechaelaboracion}}</td>

                    <td>{!! link_to_route('PrograExtendido.show', $title='Mostrar', $parameters=$PrograExtendido->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! link_to_route('PrograExtendido.edit', $title='Editar', $parameters=$PrograExtendido->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <td>{!! Form::open(['route' => ['PrograExtendido.destroy', $PrograExtendido->id], 'method'=>'DELETE'])!!}
                        {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!} 
                    {!! Form::close() !!} </td>

                </tr>
            @endforeach
        </tbody>
    </table>


    </div>
@endsection