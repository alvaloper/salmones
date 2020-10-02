@extends('plants.app')

@section('htmlheader_title')
    Permisos
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        <a class="btn btn-primary pull-right" href="{{ url('admin/plants/create') }}" data-toggle="tooltip" title="Agregar Planta" role="button">Agregar Planta</a>
        <br><br>
    @include('plants.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
