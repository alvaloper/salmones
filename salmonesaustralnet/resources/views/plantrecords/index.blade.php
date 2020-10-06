@extends('plantrecords.app')

@section('htmlheader_title')
    Registro de Eventualidades de Planta
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
       @include('flash::message')
        <a class="btn btn-primary pull-right" href="{{ url('admin/plantrecords/create') }}" data-toggle="tooltip" title="Nueva Eventualidad" role="button">Nueva Eventualidad</a>
        <br><br>
    @include('plantrecords.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
