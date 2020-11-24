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
                {!! Form::label('epagetitle', 'Título del Suceso', ['for' => 'epagetitle'] ) !!}
                {!! Form::text('epagetitle', null , ['class' => 'form-control',
                 'id' => 'epagetitle','readonly',
                 'placeholder' => 'Ingrese el título del suceso' ]  ) !!}
            </td>
        </tr>
    </table>
    <table class="table table-bordered" id="MyTableContentHeader">
        <tr>
            <td>
                {!! Form::label('epagedate', 'Fecha', ['for' => 'epagedate'] ) !!}
                {!! Form::date('epagedate', null , ['class' => 'form-control',
                 'id' => 'epagedate','readonly',
                 'placeholder' => 'Ingrese la Fecha' ]  ) !!}
            </td>
            <td>
                {!! Form::label('epagehour', 'Hora', ['for' => 'epagehour'] ) !!}
                {!! Form::time('epagehour', null , ['class' => 'form-control',
                 'id' => 'epagehour','readonly',
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
                {!! Form::label('eventepage', 'Novedades Encontradas', ['for' => 'eventepage'] ) !!}
                {!! Form::text('eventepage', null , ['class' => 'form-control',
                 'id' => 'eventepage','readonly',
                 'placeholder' => 'Ingrese las novedades encontradas' ]  ) !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('actionseventepage', 'Acciones Adoptadas', ['for' => 'actionseventepage'] ) !!}
                {!! Form::text('actionseventepage', null , ['class' => 'form-control',
                 'id' => 'actionseventepage','readonly',
                 'placeholder' => 'Ingrese las acciones adoptadas' ]  ) !!}
            </td>
        </tr>
    </table> 
    <table class="table table-bordered" id="MyTableFooter">
        <tr>
            <th colspan="4">
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
            <td class="text-center">
                <img src="{{ asset('images/'.$epagerecords->file3)  }}" width="150" height="150" class="img-rounded">
            </td>
            <td class="text-center">
                <img src="{{ asset('images/'.$epagerecords->file4)  }}" width="150" height="150" class="img-rounded">
            </td>
        </tr>
        <tr>
            <td class="text-center">
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal1" title="Ampliar Imagen"><span class="glyphicon" aria-hidden="true"></span><i class="fa fa-search-plus" style="font-size:18px"></i></button>
            </td>
            <td class="text-center">
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal2" title="Ampliar Imagen"><span class="glyphicon" aria-hidden="true"></span><i class="fa fa-search-plus" style="font-size:18px"></i></button>
            </td>
            <td class="text-center">
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal3" title="Ampliar Imagen"><span class="glyphicon" aria-hidden="true"></span><i class="fa fa-search-plus" style="font-size:18px"></i></button>
            </td>
            <td class="text-center">
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal4" title="Ampliar Imagen"><span class="glyphicon" aria-hidden="true"></span><i class="fa fa-search-plus" style="font-size:18px"></i></button>
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