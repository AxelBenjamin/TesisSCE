@extends('Maestro.layouts.master')

@section('contentMaestro')

@include('Maestro.layouts.partials.menuGD')

{!! Form::model($PrograExtendido, ['route' => ['PrograExtendido.update', $PrograExtendido->id], 'method'=>'PUT', 'class'=> 'form-horizontal', 'files' => true]) !!}

@include('Maestro.Documentos.Agregar.PrograExtendido.partials.campos')

<div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_action('ProgramaExtendidos@index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection