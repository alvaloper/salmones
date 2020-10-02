<div class="form-group">
    <table class="table table-bordered" id="MyTable">
        <tr>
            <td>
                {!! Form::label('name', 'Nombre de la Planta de Procesos', ['for' => 'nameplant'] ) !!}
                {!! Form::text('nameplant', null , ['class' => 'form-control',
                 'id' => 'nameplant',
                 'placeholder' => 'Ingrese el nombre de la planta' ]  ) !!}
            </td>
        </tr>
    </table>
</div>