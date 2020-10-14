 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>REGISTRO DE EVENTUALIDADES EN PLANTAS DE PROCESOS</b></h3>
            </div>
            <!-- /.box-header -->
            <?php         
                $cont=0;
            ?>
            <div class="box-body">
                <table id="TableUser" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">N° DE FOLIO</th>
                            <th class="text-center">TÍTULO DEL SUCESO</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">QUIÉN REPORTA</th>
                            <th class="text-center">NOVEDADES ENCONTRADAS</th>
                            <th class="text-center">ACCIONES ADOPTADAS</th>
                            <th class="text-center">PLANTA DE PROCESOS</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($plantrecords as $plantr)
                        @foreach ($plants as $plant)
                            <?php 
                                if ($plant->idplant == $plantr['plant_id']){
                                    $plantr['nameplant'] = $plant->nameplant;
                                }
                            ?>
                        @endforeach

                         @foreach ($userc as $userx)
                            <?php 
                                if ($userx->id == $plantr['user_id']){
                                    $plantr['name'] = $userx->name;
                                    $plantr['lastname'] = $userx->lastname;
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
                            <td>{{ $plantr->name }} {{ $plantr->lastname }}</td>  
                            <td>{{ $plantr->plantevente }}</td>
                            <td>{{ $plantr->actionsevent }}</td>
                            <td>{{ $plantr->nameplant }}</td>
                            
                            @if(Auth::check() && Auth::user()->isRole('root'))

                                {!! Form::open(['route' => ['plantrecords.destroy', $plantr->idplantrecord], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
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
                            @else
                                <td class="text-center">
                                <a href="#" class="btn btn-info btn-xs disabled" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true">Registro No Editable</span>
                                </a>
                                </td> 
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">N° DE FOLIO</th>
                            <th class="text-center">TÍTULO DEL SUCESO</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">QUIÉN REPORTA</th>
                            <th class="text-center">NOVEDADES ENCONTRADAS</th>
                            <th class="text-center">ACCIONES ADOPTADAS</th>
                            <th class="text-center">PLANTA DE PROCESOS</th>
                            <th class="text-center">ACCIONES</th>
                        </tr> 
                    </tfoot>
                </table>
                {{ $plantrecords->links() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          