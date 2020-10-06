<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('name', 'Nombre usuario', ['for' => 'name'] ) !!}
                {!! Form::text('name', null , ['class' => 'form-control',
                 'id' => 'name',
                 'placeholder' => 'Nombres' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('login', 'Login', ['for' => 'login'] ) !!}
                {!! Form::text('login', null , ['class' => 'form-control',
                 'id' => 'login',
                  'placeholder' => 'Login' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('email', 'E-Mail', ['for' => 'email'] ) !!}
                {!! Form::email('email', null , ['class' => 'form-control',
                 'id' => 'mail',
                  'placeholder' => 'Email' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('password', 'Indique la Clave', ['for' => 'password'] ) !!}
                {!! Form::password('password', null , ['class' => 'form-control',
                 'id' => 'password',
                  'placeholder' => 'Contraseña' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('password_confirmation', 'Confirme Clave', ['for' => 'password'] ) !!}
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