@extends('faultrecords.app')

@section('htmlheader_title')
    Fallas presentadas en el area de Control de Monitoreo
@endsection


@section('main-content')
    @if(Auth::check() && (Auth::user()->isRole('root') || Auth::user()->isRole('admin')))
       @include('flash::message')
        <br><br>
    @include('queries.faultsrecords.partials.table')
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection
