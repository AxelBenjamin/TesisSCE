@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGD')

<div class="table-responsive">
    <p>Alumnos registrados en el grupo</p>
    <table class="table table-stripped table-hover">
        <thead><tr>
            <th>Matricula</th>
            <th>Apellidos</th>
            <th>Nombre(s)</th>
            </tr></thead>
    
                
                <tbody>
                @foreach ($Grupo->alumnos as $alumno)
                <tr>
                <td>
                    {{$alumno->matricula}}
                </td>
                <td>
                    {{$alumno->apa}}
                    {{$alumno->ama}}
                </td>
                <td>
                    {{$alumno->nombre}}
                </td>
                </tr>
                @endforeach
                </tbody>
    </table>

    </div>

    {!! link_to_route('ListaAlumnos.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection

