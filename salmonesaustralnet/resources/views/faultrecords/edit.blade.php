@extends('layouts.app')

@section('htmlheader_title')
    Fallas presentadas en el area de Control de Monitoreo - Editar
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        @include('errors.mensajes')
        <h4 class="text-center">Editar Eventualidad: {{ $faultrecords->fault  }}</h4>
        {!! Form::model($faultrecords, [ 'route' => ['faultrecords.update', $faultrecords], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('faultrecords.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios de: {{ $faultrecords->fault  }}</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection