@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Bienvenido(a) {{ Auth::user()->name }}</div>
					@permission('crear.usuarios')
					 <!-- Aqui lo que quiera mostrar -->						
					@endpermission
					@if(Auth::check() && Auth::user())
					<div class="panel-body">
						<h3 class="text-primary">SalmonesAustral.Net</h3>
						<table class="table table-bordered" class="col-xs-6 col-sm-3" id="MyTable">
							<tr>
								@role('root')
								<td class="text-center"><a href="{{ url('admin/modulos') }}" ><img src="img/menu/inicio/soldado.png" alt="Roles y Permiso" width="32" height="32"><p><div style="text-align: center;">Seguridad</div></a></td>
								<div style="text-align: center;">A través de esta plataforma se puede registrar todas las eventualidades....</div>
								@else
									<td class="text-center"><a href="" ><img src="img/avatar.png" alt="Roles y Permiso" width="32" height="32"><p><div style="text-align: center;">Inicio</td>
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
