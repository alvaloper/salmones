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
						<h3 class="text-primary">Salmones Austral</h3>
						<div style="text-align: center;"><img src="{{ asset('/img/logocolor_transparent.png') }}" alt="SalmonesAustral"></div>
						<br>
						<table class="table table-bordered" class="col-xs-6 col-sm-3" id="MyTable">
							<tr>
								@role('root')
									<div style="text-align: left;">
										<p>
											Es una empresa de capitales chilenos resultado de la fusión de las compañías Trusal S.A., Salmones Pacific Star S.A. y Comsur Ltda., consolidando más de 25 años de experiencia en crianza y proceso de salmones. Del mismo modo, cuenta con cerca de treinta centros divididos en cultivos en agua dulce y agua mar. A su vez, posee dos plantas de procesos ubicadas en la región de Los Lagos, específicamente en las cercanías de la ciudad de Puerto Montt y en la Isla grande de Chiloé, lo que brinda mayor versatilidad en los procesos y en las entregas, agilizando de esta manera la distribución de forma oportuna y eficiente.
										</p>
										<p>
											Por ello, a través de esta plataforma web se puede consultar, registrar y <b>gestionar las eventualidades y fallas operacionales</b> encontradas a lo largo de todas nuestras instalaciones a nivel nacional.
										</p>
									</div>
								@else
									<div style="text-align: left;">
										<p>
											Es una empresa de capitales chilenos resultado de la fusión de las compañías Trusal S.A., Salmones Pacific Star S.A. y Comsur Ltda., consolidando más de 25 años de experiencia en crianza y proceso de salmones. Del mismo modo, cuenta con cerca de treinta centros divididos en cultivos en agua dulce y agua mar. A su vez, posee dos plantas de procesos ubicadas en la región de Los Lagos, específicamente en las cercanías de la ciudad de Puerto Montt y en la Isla grande de Chiloé, lo que brinda mayor versatilidad en los procesos y en las entregas, agilizando de esta manera la distribución de forma oportuna y eficiente.
										</p>
										<p>
											Por ello, a través de esta plataforma web se puede consultar, registrar y <b>gestionar las eventualidades y fallas operacionales</b> encontradas a lo largo de todas nuestras instalaciones a nivel nacional.
										</p>
									</div>
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
