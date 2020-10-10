<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('titlerecord', 'Título de la Eventualidad', ['for' => 'titlerecord'] ) !!}
                {!! Form::text('titlerecord', null , ['class' => 'form-control',
                 'id' => 'titlerecord',
                 'placeholder' => 'Ingrese el título' ]  ) !!}
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
                {!! Form::label('plantevente', 'Evento en la Planta', ['for' => 'plantevente'] ) !!}
                {!! Form::text('plantevente', null , ['class' => 'form-control',
                 'id' => 'plantevente',
                 'placeholder' => 'Ingrese la eventualidad en planta' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('actionsevent', 'Acciones', ['for' => 'actionsevent'] ) !!}
                {!! Form::text('actionsevent', null , ['class' => 'form-control',
                 'id' => 'actionsevent',
                 'placeholder' => 'Ingrese las acciones' ]  ) !!}
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
                {!! Form::label('user_id', 'Usuario que registra la Eventualidad', ['for' => 'user_id'] ) !!}
                {!! Form::text('user_id', null , ['class' => 'form-control',
                 'id' => 'user_id',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}
            </td>
        </tr>
    </table>
</div>