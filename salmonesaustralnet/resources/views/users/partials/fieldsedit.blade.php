<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('name', 'Nombre usuario', ['for' => 'name'] ) !!}
                {!! Form::text('name', null , ['class' => 'form-control',
                 'id' => 'name',
                 'placeholder' => 'name...Eje carlos Garcia' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('login', 'Login', ['for' => 'login'] ) !!}
                {!! Form::text('login', null , ['class' => 'form-control',
                 'id' => 'login', 'readonly',
                  'placeholder' => 'Eje... Administrador' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('email', 'E-Mail', ['for' => 'email'] ) !!}
                {!! Form::text('email', null , ['class' => 'form-control',
                 'id' => 'mail', 'readonly',
                  'placeholder' => 'Email...Eje telecom.com.ve@gamil.com' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('password', 'Indique la Clave', ['for' => 'password'] ) !!}
                {!! Form::password('password', null , ['class' => 'form-control',
                 'id' => 'password',
                  'placeholder' => 'Password...Eje 123456' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('password_confirmation', 'Confirme Clave', ['for' => 'password'] ) !!}
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