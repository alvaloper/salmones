@extends('layouts.app')

@section('htmlheader_title')
    Crear Nueva Falla en el Área de Control de Monitoreo
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h2 class="text-center">Nueva Falla en el Área de Control de Monitoreo </h2>
        {!! Form::open(['route' => 'faultrecords.store', 'method' => 'POST', 'files' => true]) !!}
        @include('faultrecords.partials.fields')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
