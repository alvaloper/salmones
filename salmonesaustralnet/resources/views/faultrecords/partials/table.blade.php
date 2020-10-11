 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Fallas presentadas en el area de Control de Monitoreo</b></h3>
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
                            <th class="text-center">Fecha de Inicio</th>
                            <th class="text-center">Hora de Inicio</th>
                            <th class="text-center">Falla</th>
                            <th class="text-center">Fecha Fin</th>
                            <th class="text-center">Hora Fin</th>
                            <th class="text-center">Solucion</th>
                            <th class="text-center">Nombre del Usuario</th>
                            <th class="text-center">Acciones</th>
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

                            <td>{{ $faultr->titlerecord }}</td> 
                            <td>{{ $faultr->dateplant }}</td>
                            <td>{{ $faultr->planthour }}</td> 
                            <td>{{ $faultr->plantevente }}</td>
                            <td>{{ $faultr->actionsevent }}</td>
                            <td>{{ $faultr->nameplant }}</td>
                            <td>{{ $faultr->name }} {{ $plantr->lastname }}</td>  

                               

                            @if(Auth::check() && Auth::user()->isRole('root'))

                                {!! Form::open(['route' => ['plantrecords.destroy', $plantr->idplantrecord], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                    <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/plantrecords/'.$plantr->idplantrecord.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro ID: $plantr->idplantrecord, Nombre: $plantr->titlerecord ?')"
                                    ]) !!}
                                
                                

                                </td> 
                                {!! Form::close() !!}

                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">Fecha de Inicio</th>
                            <th class="text-center">Hora de Inicio</th>
                            <th class="text-center">Falla</th>
                            <th class="text-center">Fecha Fin</th>
                            <th class="text-center">Hora Fin</th>
                            <th class="text-center">Solucion</th>
                            <th class="text-center">Nombre del Usuario</th>
                            <th class="text-center">Acciones</th>
                        </tr> 
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          {{ $plantrecords->links() }}