@extends('layouts.dash')

@section('title', 'Admin Dashboard')

@section('nav-content')
    <x-alloom-user.nav />
@endsection

@section('top-nav-content')
    <x-alloom-user.top-nav />
@endsection

@section('footer-content')
    <x-alloom-user.footer />
@endsection


@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Alloom Admin</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Home</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right"><a href="{{ route('alloom_user.customers.create') }}" class="btn btn-sm btn-neutral">Novo Cliente</a> <a href="#" class="btn btn-sm btn-neutral">Filtros</a></div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Novos Clientes No Mês</h5><span class="h2 font-weight-bold mb-0">350,897</span></div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow"><i class="ni ni-active-40"></i></div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> <span class="text-nowrap">Desde Agosto</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Clientes Desativados</h5><span class="h2 font-weight-bold mb-0">2,356</span></div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow"><i class="ni ni-chart-pie-35"></i></div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> <span class="text-nowrap">Desde Agosto</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Pedidos de Suporte Abertos</h5><span class="h2 font-weight-bold mb-0">924</span></div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow"><i class="ni ni-money-coins"></i></div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> <span class="text-nowrap">Desde Agosto</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Pedidos de Teste Pendentes</h5><span class="h2 font-weight-bold mb-0">49,65%</span></div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow"><i class="ni ni-chart-bar-32"></i></div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm"><span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> <span class="text-nowrap">Desde Agosto</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('main-content')

<div class="row">
    <div class="col-xl-8">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-light text-uppercase ls-1 mb-1">Relatórios</h6>
                        <h5 class="h3 text-white mb-0">Novos Clientes</h5>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k"><a href="#" class="nav-link py-2 px-3 active" data-toggle="tab"><span class="d-none d-md-block">Mês</span> <span class="d-md-none">M</span></a></li>
                            <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k"><a href="#" class="nav-link py-2 px-3" data-toggle="tab"><span class="d-none d-md-block">Semanal</span> <span class="d-md-none">W</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                    <!-- Chart wrapper --><canvas id="chart-sales-dark" class="chart-canvas"></canvas></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted ls-1 mb-1">Relatórios</h6>
                        <h5 class="h3 mb-0">Clientes Desativados</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Chart -->
                <div class="chart"><canvas id="chart-bars" class="chart-canvas"></canvas></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Pedidos de Teste</h3>
                    </div>
                    @if(count($testRequests) <= 0)
                    <span>Não há pedidos pendentes no momento.</span>
                    @endif
                    <div class="col text-right"><a href="#!" class="btn btn-sm btn-primary">Ver Todos</a></div>
                </div>
            </div>
            @if(count($testRequests) > 0)
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">WhatsApp</th>
                            <th scope="col">Tamanho da Empresa</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($testRequests as $testRequest)
                        <tr>
                            <th scope="row">{{ $testRequest->name }}</th>
                            <td>{{ $testRequest->company_name }}</td>
                            <td>{{ $testRequest->phone }}</td>
                            <td>{{ $testRequest->company_size }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline" type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <form action="{{ route('alloom_user.test.changeStatus.inProspection', [$testRequest]) }}" method="POST" class="form-loader">
                                            @csrf
                                            @method("put")

                                            <button class="dropdown-item" type="submit">Marcar como "em prospecção"</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Social traffic</h3>
                    </div>
                    <div class="col text-right"><a href="#!" class="btn btn-sm btn-primary">See all</a></div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Referral</th>
                            <th scope="col">Visitors</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Facebook</th>
                            <td>1,480</td>
                            <td>
                                <div class="d-flex align-items-center"><span class="mr-2">60%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Facebook</th>
                            <td>5,480</td>
                            <td>
                                <div class="d-flex align-items-center"><span class="mr-2">70%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Google</th>
                            <td>4,807</td>
                            <td>
                                <div class="d-flex align-items-center"><span class="mr-2">80%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Instagram</th>
                            <td>3,678</td>
                            <td>
                                <div class="d-flex align-items-center"><span class="mr-2">75%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">twitter</th>
                            <td>2,645</td>
                            <td>
                                <div class="d-flex align-items-center"><span class="mr-2">30%</span>
                                    <div>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-content')
<script>
    $('.table-responsive').on('show.bs.dropdown', function () {
        $('.table-responsive').css( "overflow", "inherit" );
    });

    $('.table-responsive').on('hide.bs.dropdown', function () {
        $('.table-responsive').css( "overflow", "auto" );
    });
</script>
@endsection
