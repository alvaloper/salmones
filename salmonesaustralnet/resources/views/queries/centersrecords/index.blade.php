@extends('centers.app')

@section('htmlheader_title')
    Consulta de Eventualidades en Centros de Cultivos
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root') || Auth::user()->isRole('admin'))
       @include('flash::message')
        <br><br>
    @include('queries.centersrecords.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
