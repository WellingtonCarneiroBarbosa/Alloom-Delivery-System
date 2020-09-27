@extends('layouts.pizza')

@section('title', 'Alloom')

@section('nav-content')
  <x-tenant_front.nav type="light" />
@endsection

@section('footer-content')
  <x-tenant-front.footer />
@endsection

@section('main-content')

    <h1>Selecione uma unidade...</h1>

    @foreach($tenant->restaurants as $restaurant)
        <a href="{{ route('tenant_company.index.restaurant', [$tenant->url_prefix, $restaurant->name]) }}">{{ $restaurant->name }}</a>
    @endforeach


@endsection

