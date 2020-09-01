@extends('layouts.dash')

@section('title', 'Clientes em Prospecção')

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
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Em Prospecção</a></li>
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
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Clientes em Prospeção</h3>
                    </div>
                    @if(count($inProspectionCustomers) <= 0)
                    <span>Não há clientes em prospecção no momento.</span>
                    @endif
                </div>
            </div>
            @if(count($inProspectionCustomers) > 0)
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
                        @foreach ($inProspectionCustomers as $inProspectionCustomer)
                        <tr>
                            <th scope="row">{{ $inProspectionCustomer->name }}</th>
                            <td>{{ $inProspectionCustomer->company_name }}</td>
                            <td>{{ $inProspectionCustomer->phone }}</td>
                            <td>{{ $inProspectionCustomer->company_size }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-outline" type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href="{{ route('alloom_user.customers.master.create', [$inProspectionCustomer]) }}" class="dropdown-item">Gerar acesso de teste</a>
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
</div>

@endsection
