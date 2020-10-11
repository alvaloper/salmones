@extends('queries.plantsrecords.app')

@section('htmlheader_title')
    Consulta de Eventualidades de Planta
@endsection

@section('main-content')
    @if(Auth::check() && (Auth::user()->isRole('root') || Auth::user()->isRole('admin')))
        @include('flash::message')
        <br><br>
        @include('queries.plantsrecords.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
