@extends('faultrecords.app')

@section('htmlheader_title')
    Folios presentados en el Área de Control de Monitoreo - Ver
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Detalles del Folio Presentado en el Área de Control de Monitoreo</b></h3>
        {!! Form::model($faultrecords, [ 'route' => ['faultrecords.update', $faultrecords], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('faultrecords.partials.fieldsshow')
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection