<div class="input-group custom-search-form">
    {!! Form::open(['method' => 'GET', 'route' => 'queries.plantsrecords.search', 'class'=>'form-group']) !!}
    {!! Form::label('search', 'Ingrese los datos para realizar la búsqueda:', ['for' => 'search'] ) !!}
    <div class="input-group">
   {!! Form::date('search', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </span>
    </div>
    {!! Form::close() !!}
</div>
<!-- /input-group -->

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Eventualidades Registradas en las Plantas de Procesos</b></h3>
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
                            <td>{{ $plantr->plantevente }}</td>
                            <td>{{ $plantr->actionsevent }}</td>
                            <td>{{ $plantr->nameplant }}</td>
                            <td>{{ $plantr->name }} {{ $plantr->lastname }}</td>  

                               

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
                        </tr> 
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
                                <div class="row">
                        <div class="col-xs-12">
                            Mostrando {{ $plantrecords->firstItem() }} de {{ $plantrecords->lastItem() }} registros. Total de registros encontrados: {{ $plantrecords->total() }}.
                            <span class="pull-right">{!! $plantrecords->setPath('')->appends(Input::query())->render() !!}</span>
                        </div>
                    </div>
          </div>
          <!-- /.box -->