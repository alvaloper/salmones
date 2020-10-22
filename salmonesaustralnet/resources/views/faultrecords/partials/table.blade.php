 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>FALLAS PRESENTADAS EN EL ÁREA DE CONTROL DE MONITOREO</b></h3>
            </div>
            <!-- /.box-header -->
            <?php         
                $cont=0;
            ?>
            <div class="box-body">
                <table id="TableUser" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">FALLA QUE PRESENTA</th>
                            <th class="text-center">QUIEN ENTREGA LA INFORMACIÓN</th>
                            <th class="text-center">FECHA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">HORA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">SOLUCIÓN AL PROBLEMA</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($faultrecords as $faultr)


                         @foreach ($userc as $userx)
                            <?php 
                                if ($userx->id == $faultr['user_id']){
                                    $faultr['name'] = $userx->name;
                                    $faultr['lastname'] = $userx->lastname;
                                }
                            ?>
                         @endforeach
                        <tr>
                            <td>
                                <?php
                                    $cont=$cont+1;                              
                                    echo $cont;
                                ?>
                            </td>
                            <td>{{ $faultr->faultdate }}</td> 
                            <td>{{ $faultr->faulthour }}</td>
                            <td>{{ $faultr->fault }}</td> 
                            <td>{{ $faultr->name }} {{ $faultr->lastname }}</td>  
                            <td>{{ $faultr->enddate }}</td>
                            <td>{{ $faultr->endhour }}</td>
                            <td>{{ $faultr->solution }}</td>
                            @if(Auth::check() && Auth::user()->isRole('root'))

                                {!! Form::open(['route' => ['faultrecords.destroy', $faultr->idfault], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                    <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/faultrecords/'.$faultr->idfault.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro: $faultr->fault ?')"
                                    ]) !!}
                                </td> 
                                {!! Form::close() !!}
                            @else
                                <td class="text-center">
                                <a href="{{ url('admin/faultrecords/'.$faultr->idfault.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">FALLA QUE PRESENTA</th>
                            <th class="text-center">QUIEN ENTREGA LA INFORMACIÓN</th>
                            <th class="text-center">FECHA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">HORA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">SOLUCIÓN AL PROBLEMA</th>
                            <th class="text-center">ACCIONES</th>
                        </tr> 
                    </tfoot>
                </table>
                {{ $faultrecords->links() }}
            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          