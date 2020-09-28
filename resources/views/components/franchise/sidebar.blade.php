
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route("franchise.dash.manager.home") }}" class="brand-link">
      <img src="{{ asset("admin-lte/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ auth()->user()->franchise->tenant->corporative_name }}<br><span>Unidade {{ auth()->user()->franchise->name }}</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}<br><span>{{ auth()->user()->getRole() }}</span></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview
                @if(request()->routeIs("franchise.dash.manager.home") === true)
                    menu-open
                @endif"
                >
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                @role("manager")
                <li class="nav-item">
                    <a href="{{ route("franchise.dash.manager.home") }}" class="nav-link {{ request()->routeIs("franchise.dash.manager.home") ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Estatísticas</p>
                    </a>
                </li>
                @endrole
                </ul>
            </li>


            <li class="nav-item has-treeview
            @if(request()->routeIs("franchise.dash.clerk.home") === true || request()->routeIs('franchise.dash.order*'))
                menu-open
            @endif">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                    Pedidos
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route("franchise.dash.clerk.home") }}" class="nav-link {{ request()->routeIs("franchise.dash.clerk.home") ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pendentes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("franchise.dash.order.in-progress") }}" class="nav-link  {{ request()->routeIs("franchise.dash.order.in-progress") ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Em Andamento</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Concluídos</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>À caminho</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Entregues</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cancelados</p>
                    </a>
                </li>
                </ul>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
