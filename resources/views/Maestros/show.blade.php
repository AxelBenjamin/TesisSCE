@extends('layouts.master')

@section('content2')

@include('layouts.partials.menuGU')

<div class="table-responsive">
	
    <table class="table table-stripped table-hover">
        
        <table class="table table-stripped table-hover">
            <tr>
                <th>Matricula</th>
                <td>{{ $Maestro->matricula }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $Maestro->apa }}
                    {{ $Maestro->ama }}
                    {{ $Maestro->nombre }}
                </td>
            </tr>
            <tr>
                <th>Nacimiento</th>
                <td>{{ $Maestro->nacimiento }}</td>
            </tr>
            <tr>
                <th>Nacionalidad</th>
                <td>{{ $Maestro->nacionalidad }}</td>
            </tr>
            <tr>
                <th>CURP</th>
                <td>{{ $Maestro->curp }}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{ $Maestro->colonia }}
                    {{ $Maestro->calle }}
                    {{ $Maestro->cp }}
                </td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $Maestro->municipio }}, 
                    {{ $Maestro->estado }}
                </td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>{{ $Maestro->telefono }}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{ $Maestro->correo }}</td>
            </tr>
            <tr>
                <th>Foto</th>
                <td>{{ $Maestro->foto }}</td>
            </tr>
            <tr>
                <th>RFC</th>
                <td>{{ $Maestro->rfc }}</td>
            </tr>
        </table>

    </table>

	</div>

    {!! link_to_route('mae.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection