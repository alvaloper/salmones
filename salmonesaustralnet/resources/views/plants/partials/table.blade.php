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
                    @foreach($users as $user)
                        <?php $user['rol'] = $user->roles()->first();?>
                    @endforeach
                        <tr>
                            <td>{{ $plant->idplant }}</td>
                            <td>{{ $plant->nameplant }}</td> 
                                {!! Form::open(['route' => ['plants.destroy', $plant->idplant], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                    <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/plants/'.$plant->idplant.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                @if($user->rol->slug <> "root")
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro ID: $plant->idplant, Nombre: $plant->nameplant ?')"
                                    ]) !!}
                                @endif
                                
                <!-- Boton para asignar los permisos al Usuario
                <a data-toggle="modal" rol_id="{{ $user->rol->id }}" data-target="#permisos"
                   class="btn btn-success btn-xs get-permisos" data-toggle="tooltip" title="Permisos">
                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-eye"></i></a>-->
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

<!-- Aquí inicia código importado -->
<div class="container">
    <div class="user">
        <div class="modal" id="permisos">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" style="text-align: center">Gestionar permisos del ID:{{$user->id}}  Usuario:{{$user->name}}  </h4>
                    </div>
                    <div class="modal-body">
                        <a href='#' id='select-all'>Select all (No implementado) / </a>
                        <a href='#' id='deselect-all'>Deselect all (No implementado)</a>
                        <select id="select-permisos" multiple="multiple">
                            @if(isset($permisos))
                                @foreach($permisos as $permiso)
                                    <option value="{{ $permiso->id }}">{{ $permiso->slug }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div id="datos"></div>
                    <div class="modal-footer">
                        <a href="#" onclick="javascript:location.reload();" data-dismiss="modal" class="btn">Cerrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Aquí Finaliza código importado -->
{!! $users->render() !!}