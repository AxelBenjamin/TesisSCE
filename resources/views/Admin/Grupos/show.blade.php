@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGCE')

<div class="table-responsive">
    <p>Alumnos registrados en el grupo</p>
    <table class="table table-hover">
        <thead>
            <th>Matricula</th>
            <th>Apellidos</th>
            <th>Nombre</th>
        </thead>
    
        @if( sizeof ($Grupo->alumnos) > 0 )
                @foreach ($Grupo->alumnos as $alumno)
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
                @endforeach
        @endif

    </table>
    </div>

    {!! link_to_route('gru.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection

