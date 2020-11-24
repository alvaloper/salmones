@extends('epagerecords.app')

@section('htmlheader_title')
    Registro de Folios
@endsection

@section('main-content')
    @if(Auth::check() && (Auth::user()->isRole('root') || Auth::user()->isRole('admin')))
       @include('flash::message')
        <a class="btn btn-primary pull-right" href="{{ url('admin/epagerecords/create') }}" data-toggle="tooltip" title="Nuevo Folio" role="button">Nuevo Folio</a>
        <br><br>
        @include('epagerecords.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
