<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Gestion</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @auth
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('img/user-photo-default.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>
        @endauth

        <!-- Sidebar Menu -->
       
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if(Auth::user()->type == 'ad')
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Menu principal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('usuario')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ciclos')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Ciclos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('empresa')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Empresas</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->type == 'tue' || Auth::user()->type == 'ad')
                <li class="nav-item">
                    <a href="{{route('modulo')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Módulos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ra')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Resultados de Aprendizajes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ce')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Criterios de Evaulacion</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tarea')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Tareas</p>
                    </a>
                </li>
                @endif
                @if(Auth::user()->type == 'al' || Auth::user()->type == 'ad')
                <li class="nav-item">
                    <a href="{{route('seguimiento')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Seguimientos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('asistencia')}}" class="nav-link">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>Asistencias</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <form id="logout-form" action="{{route('logout')}}" method="post">
                        @csrf
                    </form>
                    <a href="javascript:void(0)" class="nav-link" onclick="$('#logout-form').submit();">
                        <i class="nav-icon fa fa-sign-out"></i>
                        <p>Cerrar Sesion</p>
                    </a>
                </li>
                {{-- <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                            <i class="right fa fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
            </ul>
        </nav>
       
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
