 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>USUARIOS</b></h3>
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
                            <th class="text-center">NOMBRES</th>
                            <th class="text-center">APELLIDOS</th>
                            <th class="text-center">PERFIL</th>
                            <th class="text-center">EMAIL</th>
                            <th class="text-center">ACCIONES</th>
                        </tr> 
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <?php 
                                $user['rol'] = $user->roles()->first();
                                $cont=$cont+1;
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php                              
                                        echo $cont;
                                    ?>
                                </td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->lastname }}</td>
                                <td class="text-center">{{ $user->rol->slug }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                @if($user->rol->slug <> "root")
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro ID: $user->id, Nombre: $user->name ?')"
                                    ]) !!}
                                @endif
                                <!-- Boton para modificar al usuario seleccionado-->
                                <a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                </td>
                        {!! Form::close() !!}
                            </tr>
                         @endforeach
                    </tbody>
                    <tfoot>
                         <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">NOMBRES</th>
                            <th class="text-center">APELLIDOS</th>
                            <th class="text-center">PERFIL</th>
                            <th class="text-center">EMAIL</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </tfoot>
                </table>
                {!! $users->render() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

