<?php 
    $userx =Auth::user()->id;
    $userx0 =Auth::user()->name;
    $userx1 =Auth::user()->lastname;
    $userx2 =$userx0.' '.$userx1;
?>
<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('titlerecord', 'Título del Suceso', ['for' => 'titlerecord'] ) !!}
                {!! Form::text('titlerecord', null , ['class' => 'form-control',
                 'id' => 'titlerecord',
                 'placeholder' => 'Ingrese el título del suceso' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('dateplant', 'Fecha', ['for' => 'dateplant'] ) !!}
                {!! Form::date('dateplant', null , ['class' => 'form-control',
                 'id' => 'dateplant',
                 'placeholder' => 'Ingrese la fecha' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('planthour', 'Hora', ['for' => 'planthour'] ) !!}
                {!! Form::time('planthour', null , ['class' => 'form-control',
                 'id' => 'planthour',
                 'placeholder' => 'Ingrese la hora' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('plantevente', 'Novedades Encontradas', ['for' => 'plantevente'] ) !!}
                {!! Form::text('plantevente', null , ['class' => 'form-control',
                 'id' => 'plantevente',
                 'placeholder' => 'Ingrese las novedades encontradas' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('actionsevent', 'Acciones Adoptadas', ['for' => 'actionsevent'] ) !!}
                {!! Form::text('actionsevent', null , ['class' => 'form-control',
                 'id' => 'actionsevent',
                 'placeholder' => 'Ingrese las acciones adoptadas' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('plant_id', 'Nombre de la Planta ', ['for' => 'plant_id']) !!}
                {!! Form::select('plant_id', $plantx) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('user_id', 'Quien Reporta', ['for' => 'user_id'] ) !!}
                {!! Form::hidden('user_id', $userx  , ['class' => 'form-control',
                 'id' => 'user_id', 'readonly',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}
                
                {!! Form::text('userx2', $userx2  , ['class' => 'form-control',
                 'id' => 'userx2', 'readonly', 
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}
            </td>
        </tr>
    </table>
</div>