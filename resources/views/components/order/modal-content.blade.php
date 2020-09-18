@if(isset($success_message))
<div class="alert alert-success">
    <p>{{ $success_message }}</p>
</div>
@endif

@if($order_cart)
<div class="cart-sidebar-body"  >

    <div class="cart-sidebar-scroll">
        @foreach ($order_cart->pizza_cart as $pizza)
            <div class="cart-sidebar-item">
                <div class="media">
                    <!--<a href="#">Pizza</a>-->
                    <div class="media-body">
                    <h5> <a href="#" title="{{ $pizza["size"]->description }}">{{ $pizza["size"]->name }}</a> </h5>
                    <span>{{ $pizza["quantity"] }}x R$ {{ $pizza["unit_price"] }}</span>
                    </div>
                </div>
                <div class="cart-sidebar-item-meta">
                    @foreach ($pizza["flavors"] as $flavorPrice)
                        <span>{{ $flavorPrice->flavor->name }} | R$ {{ $flavorPrice->price }}</span>
                    @endforeach

                    @if($pizza["border"])
                        <span>Borda de {{ $pizza["border"]->border->name }} | R$ {{ $pizza["border"]->price }}</span>
                    @endif
                </div>
                <div class="cart-sidebar-price">
                    R$ {{ $pizza["total_price"] }}
                </div>

                <button class="close-btn" onclick="deletePizzaFromCart(this)" value="{{ $pizza["id"] }}">
                    <span></span>
                    <span></span>
                </button>
            </div>
        @endforeach
    </div>
</div>
<div class="cart-sidebar-footer">
    <h4>Sub-Total: <span>R$ {{ $order_cart->totalPrice }}</span> </h4>

    <form method="POST" action="{{ route("tenant-front.franchise.cart.destroy", [$franchise->tenant->url_prefix, $franchise->url_prefix]) }}">
        @csrf

        <button type="submit" class="btn-custom">Reiniciar Carrinho</button>
    </form>

    <a href="{{ route("tenant-front.franchise.order.make.step-get-1", [$franchise->tenant->url_prefix, $franchise->url_prefix]) }}" class="btn-custom">Finalizar Pedido</a>
</div>

@else
<div class="container">
    <h4>Seu carrinho está vazio</h4>
</div>
@endif
