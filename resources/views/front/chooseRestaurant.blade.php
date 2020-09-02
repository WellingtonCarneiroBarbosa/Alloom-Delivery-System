@extends('layouts.pizza')

@section('title', 'Restaurante')

@section('nav-content')
    <x-pizza.nav />
@endsection

@section('footer-content')
    <x-pizza.footer />
@endsection

@section('main-content')
    <h1>Selecione uma unidade...</h1>

    @foreach($tenant->restaurants as $restaurant)
        <a href="{{ route('tenant_company.index.restaurant', [$tenant->url_prefix, $restaurant->name]) }}">{{ $restaurant->name }}</a>
    @endforeach
@endsection
