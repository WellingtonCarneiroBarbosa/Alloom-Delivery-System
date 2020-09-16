@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Carrinho
                    @if(session("pizza_cart"))
                        <div class="float-right">
                            <a class="btn btn-sm btn-primary" href="{{ route('tenant-front.unit.delete-pizza-cart', [$unit->tenant->url_prefix, $unit->unit_url_prefix]) }}">
                                Limpar Carrinho
                            </a>
                        </div>
                    @endif
                </div>

                <div class="card-body">
                    @if(session("pizza_cart"))
                        <h1>Pizzas</h1>
                        @foreach(session("pizza_cart")->pizzas as $pizza)
                            Tamanho: <strong>{{ $pizza["pizza_size"]->name }}</strong>
                            <br>
                            Sabores:
                            <strong>
                                    @foreach($pizza["pizza_flavors"] as $flavor)
                                       {{ $flavor->name }},
                                    @endforeach
                            </strong>
                            <br>
                            Quantidade: <strong>{{ $pizza["qty"] }}</strong>
                            <br>
                            Preço Unitário: <strong>{{ $pizza["unit_price"] }}</strong>
                            <br>
                            Preço Total: <strong>{{ $pizza["total_price"] }}</strong>
                            <br>
                            <hr>
                        @endforeach
                        Total de Pizzas: <strong>{{ session("pizza_cart")->totalQty }}</strong>
                        <br>
                        Sub-Total: <strong>{{ session("pizza_cart")->totalPrice }}</strong>

                        <br>
                        <hr>
                        <a href="{{ route('tenant-front.unit.order.view.add-billing-data', [$unit->tenant->url_prefix, $unit->unit_url_prefix]) }}">Concluir Pedido</a>
                    @else
                        <h1>Seu carrinho está vazio</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
