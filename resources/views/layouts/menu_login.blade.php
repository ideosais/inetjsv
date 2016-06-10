<div id="sidebar-wrapper" class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

            <li>
                <a href="#"><i class="glyphicon glyphicon-search"></i>&nbsp;&nbsp;SACE<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/sace/stock')!!}"><i class='glyphicon glyphicon-th'></i> Stocks</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/sace/movs_terminal')!!}"><i class='glyphicon glyphicon-resize-horizontal'></i> Movimientos Terminal</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/sace/historial')!!}"><i class='glyphicon glyphicon-list-alt'></i> Historial</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/sace/cesion')!!}"><i class='glyphicon glyphicon-globe'></i> Cesión contenedor</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/sace/averias')!!}"><i class='glyphicon glyphicon-wrench'></i> Averías</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/sace/ocupacion')!!}"><i class='glyphicon glyphicon-euro'></i> Ocupación</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Gestión ficheros</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-folder-close"></i>&nbsp;&nbsp;Operaciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/operaciones/informes')!!}"><i class='glyphicon glyphicon-duplicate'></i> Informes</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/operaciones/escalas')!!}"><i class='glyphicon glyphicon-bullhorn'></i> Escalas</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/operaciones/facturacion')!!}"><i class='glyphicon glyphicon-pencil'></i> Facturacion</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Importación datos</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-wrench"></i>&nbsp;&nbsp;Taller<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/taller/partes')!!}"><i class='glyphicon glyphicon-duplicate'></i> Partes trabajo</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/taller/pptos')!!}"><i class='glyphicon glyphicon-envelope'></i> Presupuestos</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/taller/facturacion')!!}"><i class='glyphicon glyphicon-pencil'></i> Facturacion</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Importación datos</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-th"></i>&nbsp;&nbsp;Almacén<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/almacen/ordenes')!!}"><i class='glyphicon glyphicon-edit'></i> Ordenes trabajo</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/almacen/partes')!!}"><i class='glyphicon glyphicon-list-alt'></i> Partes trabajo</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/almacen/planning')!!}"><i class='glyphicon glyphicon-dashboard'></i> Planificación</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Importación datos</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Seguros<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/seguros/expedientes')!!}"><i class='glyphicon glyphicon-list-alt'></i> Expedientes</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/seguros/informes')!!}"><i class='glyphicon glyphicon-text-color'></i> Informes</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/seguros/comercial')!!}"><i class='glyphicon glyphicon-user'></i> Comerciales</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Importación datos</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-inbox"></i>&nbsp;&nbsp;Calidad<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/seguros/comercial')!!}"><i class='glyphicon glyphicon-user'></i> ISO 9001</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/seguros/expedientes')!!}"><i class='glyphicon glyphicon-list-alt'></i> Procedimientos</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/seguros/informes')!!}"><i class='glyphicon glyphicon-text-color'></i> Manuales técnicos</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Gestión ficheros</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-euro"></i>&nbsp;&nbsp;Caja / VISA<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/caja/apuntes')!!}"><i class='glyphicon glyphicon-list-alt'></i> Apuntes Caja</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/seguros/informes')!!}"><i class='glyphicon glyphicon-text-color'></i> Apuntes VISA</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/seguros/comercial')!!}"><i class='glyphicon glyphicon-user'></i> Arqueo Caja</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/seguros/comercial')!!}"><i class='glyphicon glyphicon-user'></i> Contabilidad</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Importación datos</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-record"></i>&nbsp;&nbsp;Activos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{!!URL::to('/activo')!!}"><i class='glyphicon glyphicon-list-alt'></i> Fichas activo</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/activo/informes')!!}"><i class='glyphicon glyphicon-text-color'></i> Informes</a>
                    </li>
                    <li>
                        <a href="{!!URL::to('/activo/conta')!!}"><i class='glyphicon glyphicon-user'></i> Contabilidad</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-lock"></i> Supervisor<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-home'></i> Terminales </a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-bell'></i> Gestión averías</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-eye-open'></i> Análisis equipo</a>
                            </li>
                            <li>
                                <a href="#"><i class='glyphicon glyphicon-floppy-open'></i> Importación datos</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(Auth::user()->id == 1)
                        <li>
                            <a href="{!!URL::to('/')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                        </li>
                    @endif
                    <li>
                        <a href="{!!URL::to('/auth/list')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    <div class="navbar-header" style="text-align: center">

        <a class="navbar-brand" href="#" ><img alt="Brand" style="float: left; margin: -10px 15px 15px 0px;" width="40" height="40" src="/img/JSV_logo_RGB_48.png"><i>Bienvenid@ a la Intranet del Grupo JSV</i></a>

    </div>

    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#menu-toggle" id="menu-toggle">
                <i class="fa fa-th-list fa-fw"></i>
            </a>
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                {!!Auth::user()->nombre!!}&nbsp;&nbsp;<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                </li>
                <li class="divider"></li>
                <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>