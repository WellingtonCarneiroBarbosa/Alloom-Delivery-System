@extends('layouts.front')

@section('title', 'Não Encontrado')

@section('main-content')
<main>
    <x-front.loader />
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <a href="{{ route('home.index') }}"><img class="img-fluid w-75" src="{{ asset('assets/img/illustrations/404.svg') }}" alt="404 não encontrado"></a>
                        <h1 class="mt-5">Página <span class="font-weight-bolder text-primary">não encontrada</span></h1>
                        <p class="lead my-4">Oops! Parece que você seguiu um link quebrado. Se o erro persistir, por favor, informe ao suporte.</p><a class="btn btn-primary animate-hover" href="{{ route('home.index') }}"><i class="fas fa-chevron-left mr-3 pl-2 animate-left-3"></i>Voltar para página de início</a></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
