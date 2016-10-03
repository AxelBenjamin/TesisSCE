@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGM')

<div class="table-responsive">
	
    <table class="table table-stripped table-hover">
        <tr>
            <th>Clave</th>
            <td>{{ $Materia->clave }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $Materia->nombre }}</td>
        </tr>
        <tr>
            <th>Fecha Primer Departamental</th>
            <td>{{ $Materia->fechad1 }}</td>
        </tr>
        <tr>
            <th>Fecha Segundo Departamental</th>
            <td>{{ $Materia->fechad2 }}</td>
        </tr>
        <tr>
            <th>Fecha Examen Final A</th>
            <td>{{ $Materia->fechaA }}</td>
        </tr>
        <tr>
            <th>Fecha Examen Final B</th>
            <td>{{ $Materia->fechaB }}</td>
        </tr>
        <tr>
            <th>Dia Horario</th>
            <td>{{ $Materia->dia1 }}</td>
            <td>{{ $Materia->dia1horario }}</td>
        </tr>
        <tr>
            <th>Dia Horario</th>
            <td>{{ $Materia->dia2 }}</td>
            <td>{{ $Materia->dia2horario }}</td>
        </tr>
        <tr>
            <th>Dia Horario</th>
            <td>{{ $Materia->dia3 }}</td>
            <td>{{ $Materia->dia3horario }}</td>
        </tr>
        <tr>
            <th>Semestre en que se impartirá</th>
            <td>{{ $Materia->semestres->nombre }}</td>
        </tr>
        <tr>
            <th>Maestro que impartirá</th>
            <td>{{ $Materia->maestros->nombre }}</td>
        </tr>
    </table>
    
</div>

    {!! link_to_route('mat.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection