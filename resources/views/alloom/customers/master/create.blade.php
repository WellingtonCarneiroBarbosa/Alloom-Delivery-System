@extends('layouts.dash')

@section('title', 'Novo Cliente')

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
                            <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                            <li class="breadcrumb-item"><a href="#">Master</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Novo</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right"><a href="{{ route('alloom_user.home') }}" class="btn btn-sm btn-neutral">Voltar para o Dashboard</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('main-content')

<div class="row">
    <div class="col-xl-12">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-light text-uppercase ls-1 mb-1">Cadastrar</h6>
                        <h5 class="h3 text-white mb-0">Novo Cliente Master</h5>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k"><a href="#" class="nav-link py-2 px-3 active" data-toggle="tab"><span class="d-none d-md-block">Teste</span> <span class="d-md-none">T</span></a></li>
                            <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k"><a href="#" class="nav-link py-2 px-3" data-toggle="tab"><span class="d-none d-md-block">Licenciado</span> <span class="d-md-none">L</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="col">
                    <div class="card shadow-sm text-dark p-4">
                        <div class="card-body p-2">
                            <form class="form-loader" action="{{ route('alloom_user.customers.master.create', [$alloom_customer->id]) }}" method="POST">
                                @csrf

                                <div class="form-group mb-4"><label class="h4 text-dark" for="full-name">Nome Completo</label> <input id="full-name" name="name" type="text" class="form-control" placeholder="Ex. James Curran" value="{{ old('email') ?? $alloom_customer->name }}" required></div>
                                <div class="form-group mb-4"><label class="h4 text-dark" for="company-name">E-mail</label> <input id="company-name" name="email" type="email" class="form-control" placeholder="Ex. jamescurrar@example.org" required></div>
                                </div><button class="btn btn-primary btn-block btn-loading" type="submit">Cadastrar</button></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
