@extends('layouts.app')

@section('htmlheader_title')
    Gestión de Centros de Cultivo - Editar
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        @include('errors.mensajes')
        <h4 class="text-center">Editar Centro de Cultivo: {{ $centers->namecenter  }}</h4>
        {!! Form::model($centers, [ 'route' => ['centers.update', $centers], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('centers.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios de: {{ $centers->namecenter  }}</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection