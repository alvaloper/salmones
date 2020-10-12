 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Registro de Eventualidades en Centro de Cultivos</b></h3>
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
                            <th class="text-center">Turno</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Hora Recalado</th>
                            <th class="text-center">Hora de Zarpe</th>
                            <th class="text-center">Evento</th>
                            <th class="text-center">Centro de Cultivo</th>
                            <th class="text-center">Nombre del Usuario</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($maritimerecords as $maritimex)
                        
                        @foreach ($centersx as $center)
                            <?php 
                                if ($center->idcenter == $maritimex['center_id']){
                                    $maritimex['namecenter'] = $center->namecenter;
                                }
                            ?>
                        @endforeach

                         @foreach ($userc as $userx)
                            <?php 
                                if ($userx->id == $maritimex['user_id']){
                                    $maritimex['name'] = $userx->name;
                                    $maritimex['lastname'] = $userx->lastname;
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

                            <td>{{ $maritimex->turn }}</td> 
                            <td>{{ $maritimex->datemarine }}</td>
                            <td>{{ $maritimex->landfallhour }}</td> 
                            <td>{{ $maritimex->sailhour }}</td>
                            <td>{{ $maritimex->marineevent }}</td>
                            <td>{{ $maritimex->namecenter }}</td>
                            <td>{{ $maritimex->name }} {{ $maritimex->lastname }}</td>  

                               

                            @if(Auth::check() && Auth::user()->isRole('root'))

                                {!! Form::open(['route' => ['maritimerecords.destroy', $maritimex->idmarinerecord], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                    <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/marinerecords/'.$maritimex->idmarinerecord.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro ID: $maritimex->idmarinerecord, Nombre: $maritimex->marineevent ?')"
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
                            <th class="text-center">Turno</th>
                            <th class="text-center">Fecha</th>
                            <th class="text-center">Hora Recalado</th>
                            <th class="text-center">Hora de Zarpe</th>
                            <th class="text-center">Evento</th>
                            <th class="text-center">Centro de Cultivo</th>
                            <th class="text-center">Nombre del Usuario</th>
                            <th class="text-center">Acciones</th>
                        </tr> 
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          {{ $maritimerecords->links() }}