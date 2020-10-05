@extends('layouts.tenant-front.pizza')

@section('nav-content')
    <x-tenant_front.nav :franchise="$franchise" type="light"/>
@endsection

@section('footer-content')
    <x-tenant-front.footer />
@endsection


@section('main-content')
    <x-tenant-front.alert />

    @if(isset($recent) && $recent != false)
        <h1>Pedido Realizado!</h1>
    @endif

    <h1>Detalhes do Pedido</h1>
    <strong>Pedido em nome de: {{ $order->receiver_name }}</strong>
    <br>
    <strong>Telefone de contato: {{ $order->receiver_phone }}</strong>
    <br>
    <strong>Status: @if(! $order->order_status_id) Não visualizado @else {{ $order->status->name }} @endif</strong>
    <br>
    <strong>Quantidade de itens: {{ $order->totalQuantity }}</strong>
    <br>
    <strong>Sub-Total do pedido: R$ {{ $order->totalPrice }}</strong>
    <br>
    @if($order->details)
        <strong>Detalhes: {{ $order->details }}</strong>
        <br>
    @endif
    <strong>Usou cupom de desconto?
    @if($order->dicount_code_id)
        Sim
    @else
        Não
    @endif
    </strong>
    <br>
    @if($order->pick_up_at_the_counter)
    <strong>Pedido para retirada</strong>
    @else
    <strong>Entrega em: {{ $order->receiver_address }} </strong>
    <br>
    <strong>Taxa de entrega: R$ @if(! $order->delivery_fee) 0,00 @else {{ $order->delivery_fee }} @endif</strong>
    @endif
    <br>
    <strong>Previsão de conclusão do pedido para: 21/02/2014 19:00</strong>
    <ul>
        @if(count($order->pizzas) > 0)
            <h1>Pizzas</h1>
            @foreach ($order->pizzas as $pizza)
                <li>
                    <strong>Tamanho da pizza: {{ $pizza->size->name }}</strong>
                    <br>
                    <strong>Borda da pizza: {{ $pizza->borderPrice ? $pizza->borderPrice->border->name : "tradicional" }}</strong>
                    <br>
                    <strong>Sabores:
                        @foreach($pizza->getFlavors() as $flavor)
                            {{ $flavor->name }}
                        @endforeach
                    </strong>
                    <br>
                    @if($pizza->details)
                        <strong>Detalhes da pizza: {{ $pizza->details }}</strong>
                        <br>
                    @endif
                    <strong>Quantidade: {{ $pizza->quantity }}</strong>
                    <br>
                    <strong>Preço total: R$ {{ $pizza->total_price }}</strong>
                </li>
                <hr>
            @endforeach
        @endif
    </ul>

@endsection
