@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGU')

<div class="table-responsive">
	
    <table class="table table-stripped table-hover">
        
        <table class="table table-stripped table-hover">
            <tr>
                <th>Matricula</th>
                <td>{{ $Alumno->matricula }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $Alumno->apa }}
                    {{ $Alumno->ama }}
                    {{ $Alumno->nombre }}
                </td>
            </tr>
            <tr>
                <th>Nacimiento</th>
                <td>{{ $Alumno->nacimiento }}</td>
            </tr>
            <tr>
                <th>Nacionalidad</th>
                <td>{{ $Alumno->nacionalidad }}</td>
            </tr>
            <tr>
                <th>CURP</th>
                <td>{{ $Alumno->curp }}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{ $Alumno->colonia }}
                    {{ $Alumno->calle }}
                    {{ $Alumno->cp }}
                </td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $Alumno->municipio }}, 
                    {{ $Alumno->estado }}
                </td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ $Alumno->telefono }}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{ $Alumno->correo }}</td>
            </tr>
            <tr>
                <th>Foto</th>
                <th>
                    <img src="ImagenesUsuarios/{{$Alumno->foto}}" style="width:100px;">
                </th>
            </tr>
            <tr>
                <th>Grupo</th>
                <td>{{ $Alumno->grupos->nombre }}</td>
            </tr>
        </table>

    </table>

	</div>

    {!! link_to_route('alu.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection