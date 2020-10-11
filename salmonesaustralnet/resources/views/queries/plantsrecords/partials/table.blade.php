 
<div class="input-group custom-search-form">
                        {!! Form::open(['method' => 'GET', 'route' => 'queries.plantsrecords.search', 'class'=>'form-group']) !!}
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
 <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    PlantRecords List
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 25%">Name</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($plantrecords as $plantrecord)
                                    <tr>
                                        <td>{{$plantrecord->idplantrecord?$plantrecord->idplantrecord:''}}</td>
                                        <td>{{$plantrecord->titlerecord?$plantrecord->titlerecord:''}}</td>
                                        <td>{{$plantrecord->plantevente?$plantrecord->plantevente:''}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            Showing {{ $plantrecords->firstItem() }} to {{ $plantrecords->lastItem() }} of {{ $plantrecords->total() }} entries
                            <span class="pull-right">{!! $plantrecords->setPath('')->appends(Input::query())->render() !!}</span>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>



{{ $plantrecords->links() }}