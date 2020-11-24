@extends('layouts.app')

@section('htmlheader_title')
    Crear Nuevo Folio
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Nuevo Folio</b></h3>
        {!! Form::open(['route' => 'epagerecords.store', 'method' => 'POST', 'files' => true]) !!}
        @include('epagerecords.partials.fields')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
