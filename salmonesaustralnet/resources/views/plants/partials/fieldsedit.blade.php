<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('nameplant', 'Nombre de la Planta de Procesos', ['for' => 'nameplant'] ) !!}
                {!! Form::text('nameplant', null , ['class' => 'form-control',
                 'id' => 'nameplant',
                 'placeholder' => 'Ingresar el nombre de la planta de procesos' ]  ) !!}
            </td>
        </tr>
    </table>
</div>