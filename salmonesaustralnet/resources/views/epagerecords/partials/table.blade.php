 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>REGISTRO DE FOLIOS</b></h3>
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
                            <th class="text-center">TÍTULO DEL SUCESO</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">QUIÉN REPORTA</th>
                            <th class="text-center">NOVEDADES ENCONTRADAS</th>
                            <th class="text-center">ACCIONES ADOPTADAS</th>
                            <th class="text-center">ANEXO DE FOTOS</th>
                            <th class="text-center">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($epagerecords as $epager)
                         @foreach ($userc as $userx)
                            <?php 
                                if ($userx->id == $epager['user_id']){
                                    $epager['name'] = $userx->name;
                                    $epager['lastname'] = $userx->lastname;
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
                            <td>{{ $epager->epagetitle }}</td> 
                            <td>{{ $epager->epagedate }}</td>
                            <td>{{ $epager->epagehour }}</td> 
                            <td>{{ $epager->name }} {{ $epager->lastname }}</td> 
                            <td>{{ $epager->eventepage }}</td> 
                            <td>{{ $epager->actionseventepage }}</td>
                            <td class="text-center">                        
                                <a href="{{ url('admin/epagerecords/'.$epager->idpage) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Ver">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-camera"></i>
                                </a>
                            </td>
                            @if(Auth::check() && Auth::user()->isRole('root'))
                                {!! Form::open(['route' => ['epagerecords.destroy', $epager->idpage], 'method' => 'DELETE'] ) !!}
                                <td class="text-center">
                                <a href="{{ url('admin/epagerecords/'.$epager->idpage.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                    {!! Form::button('<i class="fa fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-xs',
                                        'data-toggle'=>'tooltip',
                                        'data-title'=>'Eliminar',
                                        'data-container'=>'body',
                                        'onclick' => "return confirm('¿Está seguro de eliminar el registro: $epager->epagetitle ?')"
                                    ]) !!}
                                </td> 
                                {!! Form::close() !!}
                            @else
                                <td class="text-center">
                                <a href="{{ url('admin/epagerecords/'.$epager->idpage.'/edit') }}" class="btn btn-info btn-xs" data-toggle="tooltip" title="Modificar">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-pencil"></i>
                                </a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $epagerecords->links() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          