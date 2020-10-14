 <div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <b>
                BÚSQUEDA AVANZADA EN CENTROS DE CULTIVOS
            </b>
        </h3>
    </div>
    <div class="box-body">
        <table id="TableUser" class="table table-bordered table-hover">
            <thead>
                {!! Form::open(['method' => 'GET', 'route' => 'queries.centersrecords.search', 'class'=>'form-group']) !!}
                <tr>
                    <th class="text-center">
                        {!! Form::label('center_id', 'Nombre del centro de cultivo ', ['for' => 'center_id']) !!}
                        {!! Form::select('search1', $centers) !!}
                    </th>
                    <th class="text-center">
                        {!! Form::label('plant_id', 'Seleccione la fecha para la búsqueda:  ', ['for' => 'plant_id']) !!}{!! Form::date('search', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
                    </th>
                    <th class="text-center">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </th>
                </tr>
            </thead>
        </table>
        {!! Form::close() !!}
    </div>
</div>
<!-- /input-group -->

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>RESULTADOS DE LA BÚSQUEDA - EVENTUALIDADES REGISTRADAS EN LOS CENTROS DE CULTIVOS</b></h3>
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
                            <th class="text-center">TURNO</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA RECALADA</th>
                            <th class="text-center">NOVEDADES ENCONTRADAS</th>
                            <th class="text-center">HORA DE ZARPE</th>
                            <th class="text-center">CENTRO DE CULTIVO</th>
                            <th class="text-center">QUIEN ENTREGA LA INFORMACIÓN</th>
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

                            <td>{{$maritimex->turn?$maritimex->turn:''}}</td> 
                            <td>{{$maritimex->datemarine?$maritimex->datemarine:''}}</td>
                            <td>{{$maritimex->landfallhour?$maritimex->landfallhour:''}}</td> 
                            <td>{{$maritimex->marineevent?$maritimex->marineevent:''}}</td> 
                            <td>{{$maritimex->sailhour?$maritimex->sailhour:''}}</td> 
                            <td>{{$maritimex->namecenter?$maritimex->namecenter:''}}</td> 
                            <td>{{$maritimex->name?$maritimex->name:''}} {{$maritimex->lastname?$maritimex->lastname:''}}</td> 
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">TURNO</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA RECALADA</th>
                            <th class="text-center">NOVEDADES ENCONTRADAS</th>
                            <th class="text-center">HORA DE ZARPE</th>
                            <th class="text-center">CENTRO DE CULTIVO</th>
                            <th class="text-center">QUIEN ENTREGA LA INFORMACIÓN</th>
                        </tr> 
                    </tfoot>
                </table>
            </div>
           <!-- /.box-body -->
            <div class="row">
                <div class="col-xs-12">
                    Mostrando {{ $maritimerecords->firstItem() }} de {{ $maritimerecords->lastItem() }} registros. Total de registros encontrados: {{ $maritimerecords->total() }}.
                    <span class="pull-right">
                        {!! $maritimerecords->setPath('')->appends(Input::query())->render() !!}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>