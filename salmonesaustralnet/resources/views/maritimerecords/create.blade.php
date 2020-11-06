@extends('layouts.app')

@section('htmlheader_title')
    Crear Nueva Eventualidad en Centro de Cultivos
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Nueva Eventualidad en Centros de Cultivos</b></h3>
        {!! Form::open(['route' => 'maritimerecords.store', 'method' => 'POST', 'files' => true]) !!}
        @include('maritimerecords.partials.fields')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
