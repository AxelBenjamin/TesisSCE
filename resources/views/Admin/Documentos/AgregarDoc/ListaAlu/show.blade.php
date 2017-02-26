@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

<div class="table-responsive">
    <table class="table table-stripped table-hover">
        <thead><tr>
            <th>Matricula</th>
            <th>Nombre</th>
            </tr></thead>
    
                
                <tbody>
                @foreach ($ListaAlumno->grupos->alumnos as $alumno)
                <tr>
                <td>
                    {{$alumno->matricula}}
                </td>
                <td>
                    {{$alumno->apa}}
                    {{$alumno->ama}}
                    {{$alumno->nombre}}
                </td>
                </tr>
                @endforeach
                </tbody>
    </table>

    </div>

    {!! link_to_route('ListaAlumnos.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection

