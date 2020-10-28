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
    {!! Form::hidden('file1', null , ['class' => 'form-control',
                 'id' => 'file1', 'readonly' ]  ) !!}
    {!! Form::hidden('file2', null , ['class' => 'form-control',
                 'id' => 'file2', 'readonly' ]  ) !!}
    {!! Form::hidden('file3', null , ['class' => 'form-control',
                 'id' => 'file3', 'readonly' ]  ) !!}
    {!! Form::hidden('file4', null , ['class' => 'form-control',
                 'id' => 'file4', 'readonly' ]  ) !!}
    <table class="table table-bordered" id="MyTableFooter">
        <tr>
            <th colspan="2">
                Archivos Adjuntos
            </th>
        </tr>
        <tr>
            <td class="text-center">
                <img src="{{ asset('images/'.$faultrecords->file1) }}" width="150" height="150">
            </td>
            <td class="text-center">
                <img src="{{ asset('images/'.$faultrecords->file2)  }}" width="150" height="150">
            </td>
        </tr>
        <tr>
            <td class="text-center">
                {!! Form::file('fileNew1') !!}
            </td>
            <td class="text-center">
                {!! Form::file('fileNew2') !!}
            </td>
        </tr>
        <tr>
            <td class="text-center">
                <img src="{{ asset('images/'.$faultrecords->file3)  }}" width="150" height="150">
            </td>
            <td class="text-center">
                <img src="{{ asset('images/'.$faultrecords->file4)  }}" width="150" height="150">
            </td>
        </tr>
        <tr>
            <td class="text-center">
                {!! Form::file('fileNew3') !!}
            </td>
            <td class="text-center">
                {!! Form::file('fileNew4') !!}
            </td>
        </tr>
    </table>
    <div class="container">
        <!-- Modal 1 -->
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detalles Fotográficos</h4>
                        </div>
                        <div class="modal-body">
                            <p style="text-align:center">
                                <img src="{{ asset('images/'.$faultrecords->file1)  }}" width="550" height="550">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cerrar
                         </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>    
    <div class="container">
        <!-- Modal 2 -->
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detalles Fotográficos</h4>
                        </div>
                        <div class="modal-body">
                            <p style="text-align:center">
                                <img src="{{ asset('images/'.$faultrecords->file2)  }}" width="550" height="550">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cerrar
                         </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>    
    <div class="container">
        <!-- Modal 3 -->
            <div class="modal fade" id="myModal3" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detalles Fotográficos</h4>
                        </div>
                        <div class="modal-body">
                            <p style="text-align:center">
                                <img src="{{ asset('images/'.$faultrecords->file3)  }}" width="550" height="550">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cerrar
                         </button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="container">
        <!-- Modal 4 -->
            <div class="modal fade" id="myModal4" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Detalles Fotográficos</h4>
                        </div>
                        <div class="modal-body">
                            <p style="text-align:center">
                                <img src="{{ asset('images/'.$faultrecords->file4)  }}" width="550" height="550">
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cerrar
                         </button>
                        </div>
                    </div>
                </div>
            </div>
    </
</div>