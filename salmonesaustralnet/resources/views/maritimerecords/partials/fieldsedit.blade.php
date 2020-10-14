                    <?php 
                        $userx =Auth::user()->id;
                        $userx0 =Auth::user()->name;
                        $userx1 =Auth::user()->lastname;
                        $userx2 =$userx0.' '.$userx1;
                    ?>

<div class="form-group">
    <table class="table table-bordered" id="MyTable">
<tr>
            <td>
                {!! Form::label('turn', 'Turno', ['for' => 'turn'] ) !!}
                {!! Form::select('turn', ['Diurno' => 'Diurno', 'Nocturno' => 'Nocturno']) !!}
            </td>
        </tr>

        <tr>
            <td>
                {!! Form::label('datemarine', 'Fecha', ['for' => 'datemarine'] ) !!}
                {!! Form::date('datemarine', null , ['class' => 'form-control',
                 'id' => 'datemarine',
                 'placeholder' => 'Ingrese la fecha' ]  ) !!}
            </td>
            
        </tr>
        <tr>
            <td>
                {!! Form::label('landfallhour', 'Hora de recalada', ['for' => 'landfallhour'] ) !!}
                {!! Form::time('landfallhour', null , ['class' => 'form-control',
                 'id' => 'landfallhour',
                 'placeholder' => 'Ingrese la hora recalada' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('sailhour', 'Hora de zarpe', ['for' => 'sailhour'] ) !!}
                {!! Form::time('sailhour', null , ['class' => 'form-control',
                 'id' => 'sailhour',
                 'placeholder' => 'Ingrese la hora zarpe' ]  ) !!}
            </td>
        </tr>


        <tr>
            <td>
                {!! Form::label('marineevent', 'Novedades Encontradas ', ['for' => 'marineevent'] ) !!}
                {!! Form::text('marineevent', null , ['class' => 'form-control',
                 'id' => 'marineevent',
                 'placeholder' => 'Ingrese el evento' ]  ) !!}
            </td>
        </tr>

        <tr>
            <td>
                {!! Form::label('center_id', 'Nombre del centro de cultivo', ['for' => 'center_id']) !!}
                {!! Form::select('center_id', $centersx) !!}
            </td>
        </tr>

        <tr>
            <td>
                {!! Form::label('user_id', 'Quien Entrega la Información', ['for' => 'user_id'] ) !!}
                {!! Form::hidden('user_id', $userx  , ['class' => 'form-control',
                 'id' => 'user_id', 'readonly',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}
                
                {!! Form::text('userx2', $userx2  , ['class' => 'form-control',
                 'id' => 'userx2', 'readonly',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}

                
            </td>
        </tr>
    </table>
</div>