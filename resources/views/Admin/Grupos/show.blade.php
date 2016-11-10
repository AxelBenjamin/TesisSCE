@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGU')

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <th>Nombre</th>
            <th>Opciones</th>
        </thead>
    
    @foreach($Grupos as $Grupo) 
        <tbody>
            <th> {{$Grupo->nombre}} </th>
            <td>
                    {{ $Grupo->alumnos->nombre }}</td>
        </tbody>
    @endforeach
    </table>
    </div>

    {!! link_to_route('gru.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection

