<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('name', 'Nombres del Usuario', ['for' => 'name'] ) !!}
                {!! Form::text('name', null , ['class' => 'form-control',
                 'id' => 'name',
                 'placeholder' => 'name...' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('lastname', 'Apellidos del Usuario', ['for' => 'lastname'] ) !!}
                {!! Form::text('lastname', null , ['class' => 'form-control',
                 'id' => 'lastname',
                  'placeholder' => 'Eje... Administrador' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('email', 'E-Mail', ['for' => 'email'] ) !!}
                {!! Form::text('email', null , ['class' => 'form-control',
                 'id' => 'mail', 'readonly',
                  'placeholder' => 'Email...' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('password', 'Contraseña', ['for' => 'password'] ) !!}
                {!! Form::password('password', null , ['class' => 'form-control',
                 'id' => 'password',
                  'placeholder' => 'Password...Eje 123456' ]  ) !!}
                {!! Form::label('password_confirmation', 'Confirme la Contraseña', ['for' => 'password'] ) !!}
                {!! Form::password('password_confirmation', null , ['class' => 'form-control',
                 'id' => 'password_confirmation',
                  'placeholder' => 'Password...Eje 123456' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('role', 'Perfil', ['for' => 'role']) !!}
                {!! Form::select('rol', $roles , $user->rol->id, array('class' => 'form-control')) !!}
            </td>
        </tr>
    </table>
</div>