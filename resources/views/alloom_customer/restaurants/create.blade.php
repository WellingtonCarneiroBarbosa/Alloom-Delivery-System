@extends('layouts.dash')

@section('title', 'Cadastrar Unidade')

@section('nav-content')
    <x-alloom-customer.nav />
@endsection

@section('top-nav-content')
    <x-alloom-customer.top-nav />
@endsection


@section('footer-content')
    <x-alloom-customer.footer />
@endsection

@section('header-content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Alloom</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Unidades</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Nova Unidade</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right"><a href="{{ route('alloom_customer.home') }}" class="btn btn-sm btn-neutral">Voltar para o Dashboard</a></div>
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
                <x-alert />
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-light text-uppercase ls-1 mb-1">Cadastrar</h6>
                        <h5 class="h3 text-white mb-0">Nova Unidade</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="col">
                    <div class="card shadow-sm text-dark p-4">
                        <form class="form-loader" action="{{ route('alloom_customer.restaurants.create') }}" method="POST">
                            @csrf

                            <div class="form-group mb-4"><label class="h4 text-dark" for="name">Nome</label> <input id="name" name="name" type="text" class="form-control" placeholder="Ex. Centro" value="{{ old('name') ?? $restaurant->name ?? '' }}" required></div>
                            <div class="form-group mb-4"><label class="h4 text-dark" for="address">Endereço</label> <input id="address" name="address" type="text" class="form-control" placeholder="Ex. Rua Marechal Deodoro da Fonseca, 159, Curitiba" value="{{ old('address') ?? $restaurant->address ?? '' }}" required></div>
                            <div class="form-group mb-4"><label class="h4 text-dark" for="opens_at">Abre Às</label> <input id="opens_at" name="opens_at" type="time" class="form-control"  value="{{ old('opens_at') ?? $restaurant->opens_at ?? '' }}" required></div>
                            <div class="form-group mb-4"><label class="h4 text-dark" for="closes_at">Fecha Às</label> <input id="closes_at" name="closes_at" type="time" class="form-control"  value="{{ old('closes_at') ?? $restaurant->closes_at ?? '' }}" required></div>
                            <button class="btn btn-primary btn-block btn-loading" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
