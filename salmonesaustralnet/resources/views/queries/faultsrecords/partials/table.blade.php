<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <b>
                BÚSQUEDA AVANZADA DE FALLAS OPERACIONALES - POR FECHAS
            </b>
        </h3>
    </div>
    <div class="box-body">
        <table id="TableUser" class="table table-bordered table-hover">
            <thead>
                {!! Form::open(['method' => 'GET', 'route' => 'queries.faultsrecords.search', 'class'=>'form-group']) !!}
                <tr>
                    <th class="text-right">
                        {!! Form::label('idfault', 'Seleccione la fecha para la búsqueda:  ', ['for' => 'idfault']) !!}
                    </th>
                    <th class="text-center">
                        {!! Form::date('search', null, ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
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
              <h3 class="box-title"><b>RESULTADOS DE LA BÚSQUEDA - FALLAS OPERACIONALES</b></h3>
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
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">FALLA QUE PRESENTA</th>
                            <th class="text-center">QUIÉN ENTREGA LA INFORMACIÓN</th>
                            <th class="text-center">FECHA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">HORA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">SOLUCIÓN AL PROBLEMA</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($faultrecords as $faultr)
                       
                         @foreach ($userc as $userx)
                            <?php 
                                if ($userx->id == $faultr['user_id']){
                                    $faultr['name'] = $userx->name;
                                    $faultr['lastname'] = $userx->lastname;
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
                            <td>
                                {{$faultr->faultdate?$faultr->faultdate:''}}
                            </td>
                            <td>
                                {{$faultr->faulthour?$faultr->faulthour:''}}
                            </td>
                            <td>
                                {{$faultr->fault?$faultr->fault:''}}
                            </td>
                            <td>
                                {{$faultr->name?$faultr->name:''}} {{$faultr->lastname?$faultr->lastname:''}}
                            </td>
                            <td>
                                {{$faultr->enddate?$faultr->enddate:''}}
                            </td>
                            <td>
                                {{$faultr->endhour?$faultr->endhour:''}}
                            </td>
                            <td>
                                {{$faultr->solution?$faultr->solution:''}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="row">
                <div class="col-xs-12">
                    Mostrando {{ $faultrecords->firstItem() }} de {{ $faultrecords->lastItem() }} registros. Total de registros encontrados: {{ $faultrecords->total() }}.
                    <span class="pull-right">
                        {!! $faultrecords->setPath('')->appends(Input::query())->render() !!}
                    </span>
                </div>
            </div>
       </div>
    </div>
</div>