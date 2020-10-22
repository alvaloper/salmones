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
                {!! Form::label('faultdate', 'Inicio de la Falla', ['for' => 'faultdate'] ) !!}
                {!! Form::date('faultdate', null , ['class' => 'form-control',
                 'id' => 'faultdate',
                 'placeholder' => 'Ingrese la Fecha de Inicio' ]  ) !!}
            </td>
            
        </tr>
        <tr>
            <td>
                {!! Form::label('faulthour', 'Hora', ['for' => 'faulthour'] ) !!}
                {!! Form::time('faulthour', null , ['class' => 'form-control',
                 'id' => 'faulthour',
                 'placeholder' => 'Ingrese la Hora de Inicio' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('fault', 'Falla que presenta', ['for' => 'fault'] ) !!}
                {!! Form::text('fault', null , ['class' => 'form-control',
                 'id' => 'fault',
                 'placeholder' => 'Ingrese la Falla' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('enddate', 'Reparación de la Falla', ['for' => 'enddate'] ) !!}
                {!! Form::date('enddate', null , ['class' => 'form-control',
                 'id' => 'enddate',
                 'placeholder' => 'Ingrese la Fecha Fin' ]  ) !!}
            </td>
            
        </tr>
        <tr>
            <td>
                {!! Form::label('endhour', 'Hora de Culminación de la Falla', ['for' => 'endhour'] ) !!}
                {!! Form::time('endhour', null , ['class' => 'form-control',
                 'id' => 'endhour',
                 'placeholder' => 'Ingrese la Hora Fin' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('solution', 'Solución al Problema', ['for' => 'solution'] ) !!}
                {!! Form::text('solution', null , ['class' => 'form-control',
                 'id' => 'solution',
                 'placeholder' => 'Ingrese la Solucion' ]  ) !!}
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