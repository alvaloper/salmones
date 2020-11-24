@extends('epagerecords.app')

@section('htmlheader_title')
    Folios Registrados - Ver
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('admin|root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Detalles del Folio Registrado</b></h3>
        {!! Form::model($epagerecords, [ 'route' => ['epagerecords.update', $epagerecords], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('epagerecords.partials.fieldsshow')
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection