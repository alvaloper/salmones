<?php 
    $userx =Auth::user()->id;
    $userx0 =Auth::user()->name;
    $userx1 =Auth::user()->lastname;
    $userx2 =$userx0.' '.$userx1;
?>
<div class="form-group">
    <table class="table table-bordered" id="MyTableHeader">
        <tr>
            <td>
                {!! Form::label('titlepagerecord', 'Título del Suceso', ['for' => 'titlepagerecord'] ) !!}
                {!! Form::text('titlepagerecord', null , ['class' => 'form-control',
                 'id' => 'titlepagerecord',
                 'placeholder' => 'Ingrese el título del suceso' ]  ) !!}
            </td>
        </tr>
    </table>
    <table class="table table-bordered" id="MyTableContentHeader">
        <tr>
            <td>
                {!! Form::label('datepageplant', 'Fecha', ['for' => 'datepageplant'] ) !!}
                {!! Form::date('datepageplant', null , ['class' => 'form-control',
                 'id' => 'datepageplant',
                 'placeholder' => 'Ingrese la Fecha' ]  ) !!}
            </td>
            <td>
                {!! Form::label('plantpagehour', 'Hora', ['for' => 'plantpagehour'] ) !!}
                {!! Form::time('plantpagehour', null , ['class' => 'form-control',
                 'id' => 'plantpagehour',
                 'placeholder' => 'Ingrese la Hora' ]  ) !!}
            </td>
        </tr>
    </table>
    <table class="table table-bordered" id="MyTableFooter">
        <tr>
            <td>
                {!! Form::label('user_id', 'Quién Reporta', ['for' => 'user_id'] ) !!}
                {!! Form::hidden('user_id', $userx  , ['class' => 'form-control',
                 'id' => 'user_id', 'readonly',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}
                
                {!! Form::text('userx2', $userx2  , ['class' => 'form-control',
                 'id' => 'userx2', 'readonly',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}                
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('plantpagevent', 'Novedades Encontradas', ['for' => 'plantpagevent'] ) !!}
                {!! Form::text('plantpagevent', null , ['class' => 'form-control',
                 'id' => 'plantpagevent',
                 'placeholder' => 'Ingrese las novedades encontradas' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('actionspagevent', 'Acciones Adoptadas', ['for' => 'actionspagevent'] ) !!}
                {!! Form::text('actionspagevent', null , ['class' => 'form-control',
                 'id' => 'actionspagevent',
                 'placeholder' => 'Ingrese las acciones adoptadas' ]  ) !!}
            </td>
        </tr>
                <tr>
            <td>
                {!! Form::label('file1', 'Archivos Adjuntos', ['for' => 'file1'] ) !!}
                {!! Form::file('file1') !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::file('file2') !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::file('file3') !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::file('file4') !!}
            </td>
        </tr>
    </table>
</div>