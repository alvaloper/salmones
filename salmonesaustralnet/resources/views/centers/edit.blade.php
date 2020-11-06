@extends('layouts.app')

@section('htmlheader_title')
    Gestión de Centros de Cultivos - Editar
@endsection

@section('main-content')
    @if(Auth::check() && Auth::user()->isRole('root'))
        @include('errors.mensajes')
        <h3 class="text-center"><b>Editar Centro de Cultivo</b></h3>
        {!! Form::model($centers, [ 'route' => ['centers.update', $centers], 'method' => 'PUT', 'files' => true, 'enctype'=>'multipart/form-data']) !!}
        @include('centers.partials.fieldsedit')
        <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar cambios</button>
        {!! Form::close() !!}
    @else
        <div class="panel-body">
            {{ trans('adminlte_lang::message.permiso') }}
        </div>
    @endif
@endsection