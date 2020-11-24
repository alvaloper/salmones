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
                {!! Form::label('epagetitle', 'Título del Suceso', ['for' => 'epagetitle'] ) !!}
                {!! Form::text('epagetitle', null , ['class' => 'form-control',
                 'id' => 'epagetitle',
                 'placeholder' => 'Ingrese el título del suceso' ]  ) !!}
            </td>
        </tr>
    </table>
    <table class="table table-bordered" id="MyTableContentHeader">
        <tr>
            <td>
                {!! Form::label('epagedate', 'Fecha', ['for' => 'epagedate'] ) !!}
                {!! Form::date('epagedate', null , ['class' => 'form-control',
                 'id' => 'epagedate',
                 'placeholder' => 'Ingrese la Fecha' ]  ) !!}
            </td>
            <td>
                {!! Form::label('epagehour', 'Hora', ['for' => 'epagehour'] ) !!}
                {!! Form::time('epagehour', null , ['class' => 'form-control',
                 'id' => 'epagehour',
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
                {!! Form::label('eventepage', 'Novedades Encontradas', ['for' => 'eventepage'] ) !!}
                {!! Form::text('eventepage', null , ['class' => 'form-control',
                 'id' => 'eventepage',
                 'placeholder' => 'Ingrese las novedades encontradas' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('actionseventepage', 'Acciones Adoptadas', ['for' => 'actionseventepage'] ) !!}
                {!! Form::text('actionseventepage', null , ['class' => 'form-control',
                 'id' => 'actionseventepage',
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