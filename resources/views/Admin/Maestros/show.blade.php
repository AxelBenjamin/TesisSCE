@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGU')

<div class="table-responsive">
	
        <table class="table table-stripped table-hover">
        
            <tr>
                <th>Nombre</th>
                <td>{{ $Maestro->apa }}
                    {{ $Maestro->ama }}
                    {{ $Maestro->nombre }}
                </td>
                <th>Foto</th>
                <td><img src="ImagenesUsuarios/{{ $Maestro->foto }}" style="width:200px;">
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
                <th>Matricula</th>
                <td>{{ $Maestro->matricula }}</td>
                <th>RFC</th>
                <td>{{ $Maestro->rfc }}</td>
            </tr>
        </table>

        <table class="table table-stripped table-hover">
            
            <tr>
                <th>Dirección</th>
            </tr>
            <tr>
                <th>Colonia</th>
                <td>{{ $Maestro->colonia }}</td>
                <th>Calle</th>
                <td>{{ $Maestro->calle }}</td>
            </tr>
            <tr>
                <th>Código Postal</th>
                <td>{{ $Maestro->cp }}</td>
                <th>Municipio</th>
                <td>{{ $Maestro->municipio }}</td>
                <th>Estado</th>
                <td>{{ $Maestro->estado }}</td> 
            </tr>
        </table>

        <table class="table table-stripped table-hover">
            <tr>
                <th>Telefono</th>
                <td>{{ $Maestro->telefono }}</td>
                <th>Correo</th>
                <td>{{ $Maestro->correo }}</td>
            </tr>            
        </table>

	</div>

    {!! link_to_route('mae.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection