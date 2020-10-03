@extends('users.app')

@section('htmlheader_title')
    Gestión de Usuarios
@endsection


@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        <a class="btn btn-primary pull-right" href="{{ url('admin/users/create') }}" data-toggle="tooltip" title="Nuevo Usuario" role="button">Nuevo Usuario</a>
        <br><br>
    @include('users.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
