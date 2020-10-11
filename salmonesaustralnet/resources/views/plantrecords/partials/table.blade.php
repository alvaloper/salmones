 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Registro de Eventualidades de Plantas de Procesos</b></h3>
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
                            <th class="text-center">Título</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Hora</th>
                            <th class="text-center">Eventualidad</th>
                            <th class="text-center">Acciones Efectuadas</th>
                            <th class="text-center">Nombre de la Planta</th>
                            <th class="text-center">Nombre del Usuario</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $userx0 =Auth::user()->name;
                        $userx1 =Auth::user()->lastname;
                        $userx2 =$userx0.' '.$userx1;
                    ?>
                       @foreach ($plantrecords as $plantr)
                        @foreach ($plants as $plant)
                            <?php 
                                if ($plant->idplant == $plantr['plant_id']){
                                    $plantr['nameplant'] = $plant->nameplant;
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

                            <td>{{ $plantr->titlerecord }}</td> 
                            <td>{{ $plantr->dateplant }}</td>
                            <td>{{ $plantr->planthour }}</td> 
                            <td>{{ $plantr->plantevente }}</td>
                            <td>{{ $plantr->actionsevent }}</td>
                            <td>{{ $plantr->nameplant }}</td>
                            <td>{{ $plantr->user_id }}</td>  
                               

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
                            <th class="text-center">Título</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Hora</th>
                            <th class="text-center">Eventualidad</th>
                            <th class="text-center">Acciones Efectuadas</th>
                            <th class="text-center">Nombre de la Planta</th>
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