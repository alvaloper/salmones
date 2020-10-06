<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('name', 'Nombre de la Planta de Procesos', ['for' => 'name'] ) !!}
                {!! Form::text('nameplant', null , ['class' => 'form-control',
                 'id' => 'nameplant',
                 'placeholder' => 'Ingrese el nombre de la planta de procesos' ]  ) !!}
            </td>
        </tr>
    </table>
</div>