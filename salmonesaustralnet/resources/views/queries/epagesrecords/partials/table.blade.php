<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <b>
                BÚSQUEDA AVANZADA DE FOLIOS - POR FECHAS
            </b>
        </h3>
    </div>
    <div class="box-body">
        <table id="TableUser" class="table table-bordered table-hover">
            <thead>
                {!! Form::open(['method' => 'GET', 'route' => 'queries.epagesrecords.search', 'class'=>'form-group']) !!}
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
              <h3 class="box-title"><b>RESULTADOS DE LA BÚSQUEDA - FOLIOS</b></h3>
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
                            <td>
                                {{$epager->epagetitle?$epager->epagetitle:''}}
                            </td>
                            <td>
                                {{$epager->epagedate?$epager->epagedate:''}}
                            </td>
                            <td>
                                {{$epager->epagehour?$epager->epagehour:''}}
                            </td>
                            <td>
                                {{$epager->name?$epager->name:''}} {{$epager->lastname?$epager->lastname:''}}
                            </td>
                            <td>
                                {{$epager->eventepage?$epager->eventepage:''}}
                            </td>
                            <td>
                                {{$epager->actionseventepage?$epager->actionseventepage:''}}
                            </td>
                            <td class="text-center">                        
                                <a href="{{ url('admin/epagerecords/'.$epager->idpage) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Ver">
                                    <span class="glyphicon" aria-hidden="true"></span><i class="fa fa-camera"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="row">
                <div class="col-xs-12">
                    Mostrando {{ $epagerecords->firstItem() }} de {{ $epagerecords->lastItem() }} registros. Total de registros encontrados: {{ $epagerecords->total() }}.
                    <span class="pull-right">
                        {!! $epagerecords->setPath('')->appends(Input::query())->render() !!}
                    </span>
                </div>
            </div>
       </div>
    </div>
</div>