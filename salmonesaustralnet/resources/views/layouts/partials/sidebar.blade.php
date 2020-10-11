<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <p>.</p>
                </div>
                <div class="pull-left info">
                    <p></p>
                    <p>Menú Principal</p>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Seleccione una opción:</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Consultas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Centros de Cultivos</a></li>
                    <li><a href="#">Fallas Operacionales</a></li>
                    <li><a href="{{ url('user/queries/plants') }}">Plantas de Procesos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Eventualidades</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Centros de Cultivos</a></li>
                    <li><a href="{{ url('admin/faultrecords') }}">Fallas Operacionales</a></li>
                    <li><a href="{{ url('admin/plantrecords') }}">Plantas de Procesos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/users') }}">Gestión de Usuarios</a></li>
                    <li><a href="{{ url('admin/centers') }}">Gestión de Centros de Cultivos</a></li>
                    <li><a href="{{ url('admin/plants') }}">Gestión de Plantas de Procesos</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
