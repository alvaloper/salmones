<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <b>
                BÚSQUEDA AVANZADA EN PLANTAS DE PROCESOS
            </b>
        </h3>
    </div>
    <div class="box-body">
        <table id="TableUser" class="table table-bordered table-hover">
            <thead>
                {!! Form::open(['method' => 'GET', 'route' => 'queries.plantsrecords.search', 'class'=>'form-group']) !!}
                <tr>
                    <th class="text-center">
                        {!! Form::label('plant_id', 'Seleccione la planta de procesos:  ', ['for' => 'plant_id']) !!} {!! Form::select('search1', $plantx) !!}
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
                    <h3 class="box-title">
                        <b>
                            RESULTADOS DE LA BÚSQUEDA - EVENTUALIDADES REGISTRADAS EN LA PLANTA DE PROCESOS
                        </b>
                    </h3>
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
                            <th class="text-center">PLANTA DE PROCESOS</th>
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
                                <td>
                                    {{$plantr->titlerecord?$plantr->titlerecord:''}}
                                </td>
                                <td>
                                    {{$plantr->dateplant?$plantr->dateplant:''}}
                                </td>
                                <td>
                                    {{$plantr->planthour?$plantr->planthour:''}}
                                </td>
                                <td>
                                    {{$plantr->name?$plantr->name:''}} {{$plantr->name?$plantr->lastname:''}}
                                </td>
                                <td>
                                    {{$plantr->plantevente?$plantr->plantevente:''}}
                                </td>
                                <td>
                                    {{$plantr->actionsevent?$plantr->actionsevent:''}}
                                </td>
                                <td>
                                    {{$plantr->nameplant?$plantr->nameplant:''}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="row">
                <div class="col-xs-12">
                    Mostrando {{ $plantrecords->firstItem() }} de {{ $plantrecords->lastItem() }} registros. Total de registros encontrados: {{ $plantrecords->total() }}.
                    <span class="pull-right">
                        {!! $plantrecords->setPath('')->appends(Input::query())->render() !!}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
