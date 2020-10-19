@extends('layouts.app')

@section('htmlheader_title')
    Gestión de Centros de Cultivos - Agregar
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h2 class="text-center">Nuevo Centro de Cultivo</h2>
        {!! Form::open(['route' => 'centers.store', 'method' => 'POST', 'files' => true]) !!}
        @include('centers.partials.fields')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
