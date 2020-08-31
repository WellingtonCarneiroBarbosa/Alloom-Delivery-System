@extends('layouts.front')

@section('title', 'Erro Interno')

@section('main-content')
<main>
    <x-front.loader />
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                    <div>
                        <a href="{{ route('home.index') }}"><img class="img-fluid w-50" src="{{ asset('assets/img/illustrations/500.svg') }}" alt="404 não encontrado"></a>
                        <h1 class="mt-5">Erro <span class="font-weight-bolder text-primary">Interno</span></h1>
                        <p class="lead my-4">Ah Não! Um erro inesperado ocorreu. Por favor, comunique o time de suporte.</p><a class="btn btn-primary animate-hover" href="{{ route('home.index') }}"><i class="fas fa-chevron-left mr-3 pl-2 animate-left-3"></i>Voltar para página de início</a></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
