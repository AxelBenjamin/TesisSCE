@extends('Maestro.layouts.master')

@section('contentMaestro')

@include('Maestro.layouts.partials.menuGD')

{!! Form::model($Unidad, ['route' => ['PrograUnidad.update', $Unidad->id], 'method'=>'PUT', 'class'=> 'form-horizontal', 'files' => true]) !!}

  @include('Admin.Unidades.partials.campos')

  <div>
    <p></p>
    {!! Form::submit('Enviar',['class' => 'btn btn-default']) !!}
    {!! link_to_route('PrograExtendido.index', 'Cancelar', null, array('class' => 'btn btn-default')); !!}
  </div>
 
{!! Form::close() !!}

@endsection