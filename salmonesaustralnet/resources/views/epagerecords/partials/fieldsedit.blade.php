<?php 
    $userx =Auth::user()->id;
    $userx0 =Auth::user()->name;
    $userx1 =Auth::user()->lastname;
    $userx2 =$userx0.' '.$userx1;
?>
<div class="form-group">
    <table class="table table-bordered" id="MyTableHeader">
        <tr>
            <td>
                {!! Form::label('titlepagerecord', 'Título del Suceso', ['for' => 'titlepagerecord'] ) !!}
                {!! Form::text('titlepagerecord', null , ['class' => 'form-control',
                 'id' => 'titlepagerecord',
                 'placeholder' => 'Ingrese el título del suceso' ]  ) !!}
            </td>
        </tr>
    </table>
    <table class="table table-bordered" id="MyTableContentHeader">
        <tr>
            <td>
                {!! Form::label('datepageplant', 'Fecha', ['for' => 'datepageplant'] ) !!}
                {!! Form::date('datepageplant', null , ['class' => 'form-control',
                 'id' => 'datepageplant',
                 'placeholder' => 'Ingrese la Fecha' ]  ) !!}
            </td>
            <td>
                {!! Form::label('plantpagehour', 'Hora', ['for' => 'plantpagehour'] ) !!}
                {!! Form::time('plantpagehour', null , ['class' => 'form-control',
                 'id' => 'plantpagehour',
                 'placeholder' => 'Ingrese la Hora' ]  ) !!}
            </td>
        </tr>
    </table>
    <table class="table table-bordered" id="MyTableFooter">
        <tr>
            <td>
                {!! Form::label('user_id', 'Quién Reporta', ['for' => 'user_id'] ) !!}
                {!! Form::hidden('user_id', $userx  , ['class' => 'form-control',
                 'id' => 'user_id', 'readonly',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}
                
                {!! Form::text('userx2', $userx2  , ['class' => 'form-control',
                 'id' => 'userx2', 'readonly',
                 'placeholder' => 'Ingrese la user_id' ]  ) !!}                
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('plantpagevent', 'Novedades Encontradas', ['for' => 'plantpagevent'] ) !!}
                {!! Form::text('plantpagevent', null , ['class' => 'form-control',
                 'id' => 'plantpagevent',
                 'placeholder' => 'Ingrese las novedades encontradas' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('actionspagevent', 'Acciones Adoptadas', ['for' => 'actionspagevent'] ) !!}
                {!! Form::text('actionspagevent', null , ['class' => 'form-control',
                 'id' => 'actionspagevent',
                 'placeholder' => 'Ingrese las acciones adoptadas' ]  ) !!}
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
    <table class="table table-bordered" id="MyTableFooter_">
        <tr>
            <th colspan="2">
                Archivos Adjuntos
            </th>
        </tr>
        <tr>
            <td class="text-center">
                <img src="{{ asset('images/'.$epagerecords->file1) }}" width="150" height="150" class="img-rounded">
            </td>
            <td class="text-center">
                <img src="{{ asset('images/'.$epagerecords->file2)  }}" width="150" height="150" class="img-rounded">
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
                <img src="{{ asset('images/'.$epagerecords->file3)  }}" width="150" height="150" class="img-rounded">
            </td>
            <td class="text-center">
                <img src="{{ asset('images/'.$epagerecords->file4)  }}" width="150" height="150" class="img-rounded">
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
                                <img src="{{ asset('images/'.$epagerecords->file1)  }}" width="550" height="550">
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
                                <img src="{{ asset('images/'.$epagerecords->file2)  }}" width="550" height="550">
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
                                <img src="{{ asset('images/'.$epagerecords->file3)  }}" width="550" height="550">
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
                                <img src="{{ asset('images/'.$epagerecords->file4)  }}" width="550" height="550">
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
</div>