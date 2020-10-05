 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Plantas de Procesos</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="TableUser" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Acciones</th>
                        </tr> 
                    </thead>
                    <tbody>
                       @foreach ($plants as $plant)

                        <tr>
                            <td>{{ $plant->idplant }}</td>
                            <td>{{ $plant->nameplant }}</td> 
                                {!! Form::open(['route' => ['plants.destroy', $plant->idplant], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                    <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/plants/'.$plant->idplant.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro ID: $plant->idplant, Nombre: $plant->nameplant ?')"
                                    ]) !!}
                                
                                

                                </td> 
                                {!! Form::close() !!}
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                         <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



{{ $plants->links() }}