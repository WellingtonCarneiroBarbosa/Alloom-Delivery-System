@extends('layouts.tenant-front.pizza')

@section('nav-content')
    <x-tenant_front.nav :franchise="$franchise" type="light"/>
@endsection

@section('footer-content')
    <x-tenant-front.footer />
@endsection


@section('main-content')

    <!-- Menu Wrapper Start -->
    <div class="section section-padding">
        <div class="container">
            <h1 class="pdh1">Pizzas</h1>
            <div class="menu-container row menu-v2">
                <x-order.cart_data :cart="$cart" :franchise="$franchise" />
            </div>
        </div>
    </div>

@endsection
