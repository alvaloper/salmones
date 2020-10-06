 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Registro de Eventualidades de Plantas de Procesos</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="TableUser" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">TITLERECORD</th>
                            <th class="text-center">DATEPLANT</th>
                            <th class="text-center">PLANTHOUR</th>
                            <th class="text-center">PLANTEVENTE</th>
                            <th class="text-center">ACTIONSEVENT</th>
                            <th class="text-center">PLANT_ID</th>
                            <th class="text-center">USER_ID</th>
                        </tr> 
                    </thead>
                    <tbody>
                       @foreach ($plantrecords as $plantr)

                        <tr>
                            <td>{{ $plantr->idplantrecord }}</td>
                            <td>{{ $plantr->titlerecord }}</td> 
                            <td>{{ $plantr->dateplant }}</td>
                            <td>{{ $plantr->planthour }}</td> 
                            <td>{{ $plantr->plantevente }}</td>
                            <td>{{ $plantr->actionsevent }}</td>
                            <td>{{ $plantr->plant_id }}</td>
                            <td>{{ $plantr->user_id }}</td>     
                                {!! Form::open(['route' => ['plantrecords.destroy', $plantr->idplantrecord], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                    <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/plantrecords/'.$$plantr->idplantrecord.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro ID: $plantr->idplantrecord, Nombre: $plant->nameplant ?')"
                                    ]) !!}
                                
                                

                                </td> 
                                {!! Form::close() !!}
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">TITLERECORD</th>
                            <th class="text-center">DATEPLANT</th>
                            <th class="text-center">PLANTHOUR</th>
                            <th class="text-center">PLANTEVENTE</th>
                            <th class="text-center">ACTIONSEVENT</th>
                            <th class="text-center">PLANT_ID</th>
                            <th class="text-center">USER_ID</th>
                        </tr> 
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



{{ $plantrecords->links() }}