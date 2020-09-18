@extends('layouts.pizza')

@section('title', 'Alloom')

@section('nav-content')
  <x-pizza.nav-home />
@endsection

@section('footer-content')
  <x-pizza.footer-white-home />
@endsection

@section('main-content')


@section('main-content')
    <h1>Selecione uma unidade...</h1>

    @foreach($tenant->restaurants as $restaurant)
        <a href="{{ route('tenant_company.index.restaurant', [$tenant->url_prefix, $restaurant->name]) }}">{{ $restaurant->name }}</a>
    @endforeach


@endsection

