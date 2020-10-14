 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>CENTROS DE CULTIVOS</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="TableUser" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">NOMBRE DEL CENTRO DE CULTIVO</th>
                            <th class="text-center">NÚMERO DE EMERGENCIA</th>
                            <th class="text-center">JEFE DEL CENTRO DE CULTIVO</th>
                            <th class="text-center">ASISTENTE DEL CENTRO DE CULTIVO</th>
                            <th class="text-center">ACCIONES</th>
                        </tr> 
                    </thead>
                    <tbody>
                       @foreach ($centers as $center)
                        <tr>
                            <td>{{ $center->idcenter }}</td>
                            <td>{{ $center->namecenter }}</td> 
                            <td>{{ $center->emergencyphone}}</td>
                            <td>{{ $center->boss}}</td>
                            <td>{{ $center->assistant}}</td>
                                {!! Form::open(['route' => ['centers.destroy', $center->idcenter], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                    <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/centers/'.$center->idcenter.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro ID: $center->idcenter, Nombre: $center->namecenter ?')"
                                    ]) !!}
                                
                                

                                </td> 
                                {!! Form::close() !!}
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                         <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">NOMBRE DEL CENTRO DE CULTIVO</th>
                            <th class="text-center">NÚMERO DE EMERGENCIA</th>
                            <th class="text-center">JEFE DEL CENTRO DE CULTIVO</th>
                            <th class="text-center">ASISTENTE DEL CENTRO DE CULTIVO</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </tfoot>
                </table>
                {{ $centers->links() }}
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->