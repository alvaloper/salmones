 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>FALLAS PRESENTADAS EN EL ÁREA DE CONTROL DE MONITOREO</b></h3>
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
                            <th class="text-center">QUIEN ENTREGA LA INFORMACIÓN</th>
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
                            <td>{{ $faultr->faultdate }}</td> 
                            <td>{{ $faultr->faulthour }}</td>
                            <td>{{ $faultr->fault }}</td> 
                            <td>{{ $faultr->name }} {{ $faultr->lastname }}</td>  
                            <td>{{ $faultr->enddate }}</td>
                            <td>{{ $faultr->endhour }}</td>
                            <td>{{ $faultr->solution }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">N°</th>
                            <th class="text-center">FECHA</th>
                            <th class="text-center">HORA</th>
                            <th class="text-center">FALLA QUE PRESENTA</th>
                            <th class="text-center">QUIEN ENTREGA LA INFORMACIÓN</th>
                            <th class="text-center">FECHA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">HORA DE CULMINACIÓN DE LA FALLA</th>
                            <th class="text-center">SOLUCIÓN AL PROBLEMA</th>
                        </tr> 
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
{{ $faultrecords->links() }}