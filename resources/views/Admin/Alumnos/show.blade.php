@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGU')

<div class="table-responsive">
        
        <table class="table table-stripped table-hover">
            
            <tr>
                <th>Nombre</th>
                <td>{{ $Alumno->apa }}
                    {{ $Alumno->ama }}
                    {{ $Alumno->nombre }}
                </td>
                <th>Foto</th>
                <th>
                    <img src="/ImagenesUsuarios/{{$Alumno->foto}}" width="150" height="100">
                </th>
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
                <th>Matricula</th>
                <td>{{ $Alumno->matricula }}</td>
                <th>Grupo</th>
                <td>{{ $Alumno->grupos->nombre }}</td>
            </tr>
        </table>

        <table class="table table-stripped table-hover">

            <tr>
                <th>Dirección</th>
            </tr>
            <tr>
                <th>Colonia</th>
                <td>{{ $Alumno->colonia }}</td>
                <th>Calle</th>
                <td>{{ $Alumno->calle }}</td>
            </tr>                
            <tr>
                <th>Código Postal</th>
                <td>{{ $Alumno->cp }}</td>
                <th>Municipio</th>
                <td>{{ $Alumno->municipio }}</td>
                <th>Estado</th> 
                <td>{{ $Alumno->estado }}</td>
            </tr>
        </table>

        <table class="table table-stripped table-hover">
            <tr>
                <th>Telefono</th>
                <td>{{ $Alumno->telefono }}</td>
                <th>Correo</th>
                <td>{{ $Alumno->correo }}</td>
            </tr>
        </table>

	</div>

    {!! link_to_route('alu.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection