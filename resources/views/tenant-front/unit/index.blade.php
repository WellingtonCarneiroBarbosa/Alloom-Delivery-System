@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($unit->pizzaBorders as $border)
            @if(! $border->borders->is_traditional)

                <strong>Borda de {{ $border->borders->name }}</strong>
                <br>
                @foreach ($border->borders->prices as $price)
                    <strong>Tamanho: {{ $price->sizes->name }}</strong> |
                    <strong>Preço: R$ {{ $price->price }}</strong>
                    <br>
                @endforeach
                <hr>
                <br>
            @endif
        @endforeach
        <h1>Restaurante: {{ $unit->tenant->url_prefix }}</h1>
        <h1>Unidade: {{ $unit->unit_name }}</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Adicionar Pizza ao Carrinho
                        <div class="float-right">
                            <a href="{{ route("tenant-front.unit.view-pizza-cart", [$unit->tenant->url_prefix, $unit->unit_url_prefix]) }}">
                                Visualizar Carrinho
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session("success"))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{ session("success") }}</li>
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('tenant-front.unit.add-pizza-to-cart', [$unit->tenant->url_prefix, $unit->unit_url_prefix]) }}" method="POST">
                            @csrf

                            <input type="hidden" name="unit_id" value="{{ $unit->id }}">

                            @foreach ($unit->pizzaSizes as $size)
                            <label for="pizza_size_id[{{ $size->pizza_size_id }}]">
                                Tamanho: <strong>{{ $size->sizes->name }}</strong>
                                <br>
                                Fatias: <strong>{{ $size->sizes->pieces }}</strong>
                                <br>
                                Quantidade de Sabores: <strong>{{ $size->sizes->max_flavors }}</strong>
                                @if($unit->tenant->configurations->price_per_pizza_size)
                                    <br>
                                    Preço: <strong>{{ $size->sizes->price }}</strong>
                                @endif
                            </label>
                            <input type="radio" name="pizza_size_id" id="pizza_size_id[{{ $size->pizza_size_id }}]" value="{{ $size->pizza_size_id }}">
                            |
                            @endforeach

                            <br>
                            <hr>
                            @foreach($unit->pizzaFlavors as $flavor)
                                <label for="pizza_flavor[{{ $flavor->pizza_flavor_id }}]">
                                    Categoria: <strong>{{ $flavor->flavors->label->name }}</strong>
                                    <br>
                                    Sabor: <strong>{{ $flavor->flavors->name }}</strong>
                                    @if(! $unit->tenant->configurations->price_per_pizza_size)
                                        Preço: <strong>{{ $flavor->flavors->price }}</strong>
                                    @endif
                                </label>
                                |
                                <input type="checkbox" name="pizza_flavors[{{ $flavor->pizza_flavor_id }}]" id="pizza_flavor[{{ $flavor->pizza_flavor_id }}]" value="{{ $flavor->pizza_flavor_id }}">
                            @endforeach

                            <br>
                            <hr>

                            <label for="pizza_order_qty">Quantidade</label>
                            <input type="number" name="pizza_order_qty" id="pizza_order_qty" value="1">

                            <hr>
                            <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                        </form>
                    </div>
                </div>
            </div>

            @foreach($unit->pizzaSizes as $size)
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{  $size->sizes->name  }}</strong>
                            <div class="float-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalFlavors">
                                    Adicionar ao Carrinho
                                </button>
                            </div>
                        </div>

                        @if($unit->tenant->configurations->price_per_pizza_size)
                            <div class="card-body">
                                Preço: <strong>{{ $size->sizes->price }}</strong>
                                <br>
                                Pedaços: <strong>{{ $size->sizes->pieces }}</strong>
                                <br>
                                Sabores: <strong>{{ $size->sizes->max_flavors }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Flavors Modal --}}
    <div class="modal fade" id="modalFlavors" tabindex="-1" role="dialog" aria-labelledby="modalFlavorsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalFlavorsLabel">Escolha o Sabor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @foreach($unit->pizzaFlavors as $flavor)
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-header">Categoria: <strong>{{ $flavor->flavors->label->name }}</strong></div>

                                <div class="card-body">
                                    <strong>{{ $flavor->flavors->name }}</strong>
                                    @if(! $unit->tenant->configurations->price_per_pizza_size)
                                        <strong>{{ $flavor->flavors->price }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
            </div>
        </div>
        </div>
    </div>
@endsection
