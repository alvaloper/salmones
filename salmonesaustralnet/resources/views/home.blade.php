@extends('layouts.app')

@section('htmlheader_title')
	Inicio
@endsection

@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Bienvenido(a) {{ Auth::user()->name }} {{ Auth::user()->lastname }}</div>
					@if(Auth::check() && Auth::user())
					<div class="panel-body">
						<h3 class="text-primary">SalmonesAustral.Net</h3>
						<table class="table table-bordered" class="col-xs-6 col-sm-3" id="MyTable">
							<tr>
								@role('root')
									<div style="text-align: center;">A través de esta plataforma se puede registrar todas las eventualidades....</div>
								@else
									<div style="text-align: center;">A través de esta plataforma se puede registrar todas las eventualidades....</div>
								@endrole
							</tr>
						</table>
					</div>
					@else
						<div class="panel-body">
							{{ trans('adminlte_lang::message.permiso') }}
						</div>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection
