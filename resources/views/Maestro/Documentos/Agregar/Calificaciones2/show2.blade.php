@extends('Maestro.layouts.master')

@section('contentMaestro')

@include('Maestro.layouts.partials.menuGD')

<div class="table-responsive">
    
    <table class="table table-stripped table-hover">
        <tr>
            <th>1er. Departamental Faltas</th>
            <td>{{ $Calificaciones2->calificacionfaltaD1 }}</td>
        </tr>
        <tr>
            <th>1er. Departamental Calificación</th>
            <td>{{ $Calificaciones2->calificacionD1 }}</td>
        </tr>

        <tr>
            <th>2do. Departamental Faltas</th>
            <td>{{ $Calificaciones2->calificacionfaltaD2 }}</td>
        </tr>
        <tr>
            <th>2do. Departamental Calificacion</th>
            <td>{{ $Calificaciones2->calificacionD2 }}</td>
        </tr>

        <tr>
            <th>Parcial Faltas </th>
            <td>{{ $Calificaciones2->calificacionfaltaP }}</td>
        </tr>
        <tr>
            <th>Parcial Calificacion </th>
            <td>{{ $Calificaciones2->calificacionP }}</td>
        </tr>

        <tr>
            <th>Faltas Total</th>
            <td>{{ $Calificaciones2->calificacionfaltaD1 + $Calificaciones2->calificacionfaltaD2 + $Calificaciones2->calificacionfaltaP}}</td>
        </tr>
        <tr>
            <th>Promedio Semestre</th>
            <td>{{ $Calificaciones2->calificacionsemestre }}</td>
        </tr>

        <tr>
            <th>Calificacion Final A</th>
            <td>{{ $Calificaciones2->calificacionFA }}</td>
        </tr>
        <tr>
            <th>Calificacion Final B</th>
            <td>{{ $Calificaciones2->calificacionFB }}</td>
        </tr>
        <tr>
            <th>Promedio Final</th>
            <td>{{ $Calificaciones2->calificaciontotal }}</td>
        </tr>

    </table>

    </div>



    {!! link_to_route('Calificaciones2.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection