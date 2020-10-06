<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('name', 'Nombres del Usuario', ['for' => 'name'] ) !!}
                {!! Form::text('name', null , ['class' => 'form-control',
                 'id' => 'name','placeholder' => 'Nombres' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('lastname', 'Apellidos del Usuario', ['for' => 'lastname'] ) !!}
                {!! Form::text('lastname', null , ['class' => 'form-control',
                 'id' => 'lastname','placeholder' => 'Apellidos' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('email', 'Email del Usuario', ['for' => 'email'] ) !!}
                {!! Form::email('email', null , ['class' => 'form-control',
                 'id' => 'mail','placeholder' => 'Email@salmonesaustral.net' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('password', 'Contraseña', ['for' => 'password'] ) !!}
                {!! Form::password('password', null , ['class' => 'form-control',
                 'id' => 'password',
                  'placeholder' => 'Contraseña' ]  ) !!}
                {!! Form::label('password_confirmation', 'Confirmación de la Contraseña', ['for' => 'password'] ) !!}
                {!! Form::password('password_confirmation', null , ['class' => 'form-control',
                 'id' => 'password_confirmation',
                  'placeholder' => 'Confirmación de Contraseña' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('role', 'Rol', ['for' => 'role']) !!}
                {!! Form::select('rol', $roles , null, array('class' => 'form-control')) !!}
            </td>
        </tr>
    </table>
</div>