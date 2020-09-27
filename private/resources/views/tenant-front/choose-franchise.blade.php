@extends('layouts.welcome.app')

@section('title', 'Alloom')

@section('nav-content')
  <x-welcome.nav />
@endsection

@section('footer-content')
  <x-welcome.footer />
@endsection


@section('main-content')

<div class="container" style="padding-top: 5%; padding-bottom:5%">
    <h2>Escolha uma unidade para <strong>{{ $tenant->url_prefix }}</strong></h2>
    <div class="row">
        @foreach($tenant->franchises as $franchise)
         <a href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"><div class="col-md-3 col-sm-6 ">
           <div class="card">
                <a class="product-thumb"  href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"> <img src="{{asset('pizza-slices/assets/img/misc/logo_pizza.png')}}" alt="logo" /> </a>

                <div class="card-header">
                    <a href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"><p class="franchiseNameCard"><strong>{{ $franchise->name }}</strong></p></a>
                        <p class="franchiseAdressCard">Rua das flores 55, Centro, Curitiba</p>
                        <a href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"><p class="franchiseOpenCard closedFranchise"><strong>Fechado</strong></p></a>
                </div>
            </div>
        </div></a>
        @endforeach
        @foreach($tenant->franchises as $franchise)
         <a href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"><div class="col-md-3 col-sm-6 ">
           <div class="card">
                <a class="product-thumb"  href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"> <img src="{{asset('pizza-slices/assets/img/misc/logo_pizza.png')}}" alt="logo" /> </a>

                <div class="card-header">
                    <a href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"><p class="franchiseNameCard"><strong>{{ $franchise->name }}</strong></p></a>
                        <p class="franchiseAdressCard">Rua da Liesley 1199, Centro, Curitiba</p>
                        <a href="{{ route('tenant-front.franchise.index', [$tenant->url_prefix, $franchise->url_prefix]) }}"><p class="franchiseOpenCard openFranchise">Aberto até às <strong>22:00</strong></p></a>
                </div>
            </div>
        </div></a>
        @endforeach
    </div>
</div>

@endsection


