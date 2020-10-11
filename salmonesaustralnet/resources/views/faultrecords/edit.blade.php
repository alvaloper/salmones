@extends('layouts.app')

@section('htmlheader_title')
    Registro de Eventualidades de Planta - Editar
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        @include('errors.mensajes')
        <h4 class="text-center">Editar Eventualidad: {{ $plantrecords->titlerecord  }}</h4>
        {!! Form::model($plantrecords, [ 'route' => ['plantrecords.update', $plantrecords], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('plantrecords.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios de: {{ $plantrecords->titlerecord  }}</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection