@extends('Admin.layouts.master')

@section('content2')

@include('Admin.layouts.partials.menuGM')

<div class="table-responsive">
	
    <table class="table table-stripped table-hover">
        
        <table class="table table-stripped table-hover">
            <tr>
                <th>Nombre</th>
                <td>{{ $Unidad->nombre }}</td>
            </tr>
            <tr>
                <th>Horas Teoricas</th>
                <td>{{ $Unidad->hrsteoricas }}</td>
            </tr>
            <tr>
                <th>Horas Practicas</th>
                <td>{{ $Unidad->hrspracticas }}</td>
            </tr>

            <tr>
                <th>Total horas</th>
                <td>{{ $Unidad->hrspracticas + $Unidad->hrsteoricas}}</td>
            </tr>

            <tr>
                <th>Clases Teoricas</th>
                <td>{{ $Unidad->clasesteoricas }}</td>
            </tr>
            <tr>
                <th>Clases Practicas</th>
                <td>{{ $Unidad->clasespracticas }}</td>
            </tr>
            <tr>
                <th>Bibliografia</th>
                <td>{{ $Unidad->bibliografia }}
                </td>
            </tr>
            <tr>
                <th>Aprendizaje</th>
                <td>{{ $Unidad->aprendizaje }}, 
                </td>
            </tr>
            <tr>
                <th>Recursos Didacticos</th>
                <td>{{ $Unidad->recursosdidacticos }}</td>
            </tr>
            <tr>
                <th>Propositos</th>
                <td>{{ $Unidad->propositos }}</td>
            </tr>
            <tr>
                <th>Sistema de Evaluacion</th>
                <td>{{ $Unidad->sistemaevaluacion }}</td>
            </tr>
        </table>

    </table>

	</div>

    {!! link_to_route('uni.index', 'Atras', null, array('class' => 'btn btn-default')); !!}

@endsection