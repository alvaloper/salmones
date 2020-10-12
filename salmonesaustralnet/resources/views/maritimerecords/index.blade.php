@extends('maritimerecords.app')

@section('htmlheader_title')
    Registro de Eventualidades en Centro de Cultivos
@endsection


@section('main-content')
    @if(Auth::check() && (Auth::user()->isRole('root') || Auth::user()->isRole('admin')))
       @include('flash::message')
        <a class="btn btn-primary pull-right" href="{{ url('admin/maritimerecords/create') }}" data-toggle="tooltip" title="Nueva Eventualidad" role="button">Nueva Eventualidad</a>
        <br><br>
    @include('maritimerecords.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
