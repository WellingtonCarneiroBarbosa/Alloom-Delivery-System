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
                    <li class="nav-item"><a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards"><i class="ni ni-shop text-primary"></i> <span class="nav-link-text">Dashboards</span></a>
                        <div class="collapse show" id="navbar-dashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item"><a href="#" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Dashboard</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples"><i class="ni ni-ungroup text-orange"></i> <span class="nav-link-text">Examples</span></a>
                        <div class="collapse" id="navbar-examples">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item"><a href="pages/examples/login.html" class="nav-link"><span class="sidenav-mini-icon">L </span><span class="sidenav-normal">Login</span></a></li>
                                <li class="nav-item"><a href="pages/examples/register.html" class="nav-link"><span class="sidenav-mini-icon">R </span><span class="sidenav-normal">Register</span></a></li>
                                <li class="nav-item"><a href="pages/examples/profile.html" class="nav-link"><span class="sidenav-mini-icon">P </span><span class="sidenav-normal">Profile</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables"><i class="ni ni-align-left-2 text-default"></i> <span class="nav-link-text">Tables</span></a>
                        <div class="collapse" id="navbar-tables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item"><a href="pages/tables/tables.html" class="nav-link"><span class="sidenav-mini-icon">T </span><span class="sidenav-normal">Tables</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps"><i class="ni ni-map-big text-primary"></i> <span class="nav-link-text">Maps</span></a>
                        <div class="collapse" id="navbar-maps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item"><a href="pages/maps/google.html" class="nav-link"><span class="sidenav-mini-icon">G </span><span class="sidenav-normal">Google</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <hr class="my-3">
                    <h6 class="navbar-heading pl-4 text-muted"><span class="docs-normal">Documentation</span></h6>
                    <li class="nav-item"><a class="nav-link" href="https://demos.creative-tim.com/impact-design-system-pro/docs/getting-started/quick-start/"><i class="ni ni-spaceship"></i> <span class="nav-link-text">Getting started</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://demos.creative-tim.com/impact-design-system-pro/docs/dashboard/alerts/"><i class="ni ni-ui-04"></i> <span class="nav-link-text">Components</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://demos.creative-tim.com/impact-design-system-pro/docs/plugins/charts/"><i class="ni ni-chart-pie-35"></i> <span class="nav-link-text">Plugins</span></a></li>
                    <li class="nav-item"><a class="nav-link active active-pro" href="https://www.creative-tim.com/product/impact-design-system-pro" target="_blank"><i class="ni ni-send text-primary"></i> <span class="nav-link-text">Upgrade to PRO</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
