@extends('layouts.app')

@section('htmlheader_title')
    Configuración - Editar Plantas de Procesos
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        @include('errors.mensajes')
        <h4 class="text-center">Editar Planta de Procesos: {{ $plant->nameplant  }}</h4>
        {!! Form::model($plant, [ 'route' => ['plants.update', $plant], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('plants.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios de: {{ $plant->nameplant  }}</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection