@extends('layouts.app')

@section('htmlheader_title')
    Registro de Eventualidades en Centro de Cultivos - Editar
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        @include('errors.mensajes')
        <h4 class="text-center">Editar Eventualidad: {{ $maritimerecords->marineevent  }}</h4>
        {!! Form::model($maritimerecords, [ 'route' => ['maritimerecords.update', $maritimerecords], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('maritimerecords.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios de: {{ $maritimerecords->marineevent  }}</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection