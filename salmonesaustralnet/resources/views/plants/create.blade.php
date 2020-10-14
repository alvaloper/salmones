@extends('layouts.app')

@section('htmlheader_title')
    Gestión de Plantas de Procesos - Agregar
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h2 class="text-center">Nueva Planta de Procesos</h2>
        {!! Form::open(['route' => 'plants.store', 'method' => 'POST', 'files' => true]) !!}
        @include('plants.partials.fields')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
