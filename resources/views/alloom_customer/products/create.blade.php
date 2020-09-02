@extends('layouts.dash')

@section('title', 'Cadastrar Produto')

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
                            <li class="breadcrumb-item"><a href="#">Produtos</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Novo Produto</a></li>
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
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-light text-uppercase ls-1 mb-1">Cadastrar</h6>
                        <h5 class="h3 text-white mb-0">Novo Produto</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="col">
                    <div class="card shadow-sm text-dark p-4">
                        <form class="form-loader" action="{{ route('alloom_customer.products.create') }}" method="POST">
                            @csrf

                            <div class="form-group mb-4"><label class="h4 text-dark" for="name">Nome</label> <input id="name" name="name" type="text" class="form-control" placeholder="Ex. Coca-Cola 200ml" value="{{ old('name') ?? $product->name ?? '' }}" required></div>
                            <div class="form-group mb-4"><label class="h4 text-dark" for="price">Preço</label> <input id="price" name="price" type="number" class="form-control" placeholder="Ex. R$ 15,55" value="{{ old('price') ?? $product->price ?? '' }}" required></div>
                            <button class="btn btn-primary btn-block btn-loading" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
