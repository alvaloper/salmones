@extends('plants.app')

@section('htmlheader_title')
    Gestión de Plantas de Procesos
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        <a class="btn btn-primary pull-right" href="{{ url('admin/plants/create') }}" data-toggle="tooltip" title="Nuevo Usuario" role="button">Nueva Planta de Procesos</a>
        <br><br>
    @include('plants.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
