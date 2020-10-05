<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('name', 'Nombre del Centro de Cultivo', ['for' => 'name'] ) !!}
                {!! Form::text('namecenter', null , ['class' => 'form-control',
                 'id' => 'namecenter',
                 'placeholder' => 'Ingrese el nombre del Centro de Cultivo' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('name', 'Número de Emergencia', ['for' => 'name'] ) !!}
                {!! Form::text('emergencyphone', null , ['class' => 'form-control',
                 'id' => 'emergencyphone',
                 'placeholder' => 'Ingrese el número de emergencia del centro de cultivo' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('name', 'Jefe del Centro de Cultivo', ['for' => 'name'] ) !!}
                {!! Form::text('boss', null , ['class' => 'form-control',
                 'id' => 'boss',
                 'placeholder' => 'Ingrese el nombre del jefe del centro de cultivo' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('name', 'Asistente del Centro de Cultivo', ['for' => 'name'] ) !!}
                {!! Form::text('assistant', null , ['class' => 'form-control',
                 'id' => 'assistant',
                 'placeholder' => 'Ingrese el nombre del asistente del centro de cultivo' ]  ) !!}
            </td>
        </tr>
    </table>
</div>