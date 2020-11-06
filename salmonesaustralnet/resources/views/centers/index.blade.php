@extends('centers.app')

@section('htmlheader_title')
    Gestión de Centros de Cultivos
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
       @include('flash::message')
        <a class="btn btn-primary pull-right" href="{{ url('admin/centers/create') }}" data-toggle="tooltip" title="Nuevo Centro de Cultivo" role="button">Nuevo Centro de Cultivo</a>
        <br><br>
    @include('centers.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
