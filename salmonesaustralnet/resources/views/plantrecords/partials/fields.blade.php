<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('titlerecord', 'Titulo del campo', ['for' => 'titlerecord'] ) !!}
                {!! Form::text('titlerecord', null , ['class' => 'form-control',
                 'id' => 'titlerecord',
                 'placeholder' => 'Ingrese el titulo del campo' ]  ) !!}
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
                {!! Form::label('plantevente', 'Titulo de plantevente', ['for' => 'plantevente'] ) !!}
                {!! Form::text('plantevente', null , ['class' => 'form-control',
                 'id' => 'plantevente',
                 'placeholder' => 'Ingrese la plantevente' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('actionsevent', 'Titulo de actionsevent', ['for' => 'actionsevent'] ) !!}
                {!! Form::text('actionsevent', null , ['class' => 'form-control',
                 'id' => 'actionsevent',
                 'placeholder' => 'Ingrese la actionsevent' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('plant_id', 'Titulo de plant_id', ['for' => 'plant_id']) !!}
                {!! Form::select('plant_id', $plantx) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('user_id', 'Titulo de user_id', ['for' => 'user_id'] ) !!}
                {!! Form::text('user_id', null , ['class' => 'form-control',
                 'id' => 'user_id',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}
            </td>
        </tr>
    </table>
</div>