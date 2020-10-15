@extends('layouts.app')

@section('htmlheader_title')
    Crear Nueva Eventualidad de Planta
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Nueva Eventualidad en la Planta de Procesos</b></h3>
        {!! Form::open(['route' => 'plantrecords.store', 'method' => 'POST', 'files' => true]) !!}
        @include('plantrecords.partials.fields')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
