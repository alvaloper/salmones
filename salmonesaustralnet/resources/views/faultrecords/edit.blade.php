@extends('layouts.app')

@section('htmlheader_title')
    Folios presentados en el Área de Control de Monitoreo - Editar
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Editar Folio Presentado en el Área de Control de Monitoreo</b></h3>
        {!! Form::model($faultrecords, [ 'route' => ['faultrecords.update', $faultrecords], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('faultrecords.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection