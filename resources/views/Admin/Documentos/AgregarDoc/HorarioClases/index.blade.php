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

    {!! link_to_route('Horario.create', 'Agregar Horario de Clases', null, array('class' => 'btn btn-default')); !!}

    <table class="table table-stripped table-hover">
        <thead>
            <th>Semestre</th>
            <th colspan="2">Opciones</th>
        </thead>

        <tbody>

         @foreach($Horarios as $Horario)
                <tr>
                    <td>{{$Horario->semestres->nombre}}</td>

                    <td><a href="/ImagenesUsuarios/53Octavo Semestre.pdf" target="_blank" class = 'btn btn-primary'>Ver</a></td>

                    <td>{!! link_to_route('Horario.edit', $title='Editar', $parameters=$Horario->id, $attributes = ['class' => 'btn btn-primary']) !!}
                    </td>

                    <th>{!! Form::open(['route' => ['Horario.destroy', $Horario->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Eliminar',['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!} </th>

                </tr>
            @endforeach
        </tbody>
    </table>
    
    


    </div>
@endsection