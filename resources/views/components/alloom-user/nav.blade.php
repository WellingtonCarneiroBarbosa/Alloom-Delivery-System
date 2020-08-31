<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ auth()->guard('alloom_user')->check() ? route('alloom_user.home') : route('alloom_customer.home') }}"><img src="{{ asset('dashboard/assets/img/brand/dark.svg') }}" height="40" class="navbar-brand-img" alt="..."></a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner"><i class="sidenav-toggler-line"></i> <i class="sidenav-toggler-line"></i> <i class="sidenav-toggler-line"></i></div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('alloom_user.home*') ? 'active' : '' }}" href="{{ route('alloom_user.home') }}"><i class="ni ni-shop text-primary"></i> <span class="nav-link-text">Home</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#navbar-customers" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-customers"><i class="ni ni-ungroup text-orange"></i> <span class="nav-link-text">Clientes</span></a>
                        <div class="collapse" id="navbar-customers">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item"><a href="pages/customers/login.html" class="nav-link"><span class="sidenav-mini-icon">L </span><span class="sidenav-normal">Novo Cliente</span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
