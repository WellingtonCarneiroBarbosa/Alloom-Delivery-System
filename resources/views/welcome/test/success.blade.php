@extends('layouts.front')

@section('title', 'Início')

@section('nav-content')
    <x-front.nav />
@endsection

@section('footer-content')
    <x-front.footer />
@endsection

@section('main-content')
<section class="section-header pb-7 pb-lg-11 bg-primary text-white">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <h2 class="h4 font-weight-normal text-muted">Pedido Concluído</h2>
                <h1 class="display-1 mb-4">Parabéns! Sua pizzaria está a poucos metros de se tornar referência em sua área de atuação.</h1>
                <p class="lead mb-3 mb-lg-5">Em breve, nossa equipe de sucesso ao cliente entrará em contato no telefone {{ $test->phone }}.</p><a class="btn btn-secondary animate-up-2 mb-5 mb-lg-0" target="_blank"
                    href="../../../../themesberg.com/docs/rocket/getting-started/overview/index.html"><i class="fas fa-file-alt mr-2"></i>O telefone está incorreto? Clique aqui</a></div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>
@endsection
