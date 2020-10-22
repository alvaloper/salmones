@extends('layouts.app')

@section('htmlheader_title')
    Registro de Eventualidades de Planta - Editar
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Editar Eventualidad en la Planta de Procesos</b></h3>
        {!! Form::model($plantrecords, [ 'route' => ['plantrecords.update', $plantrecords], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('plantrecords.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection