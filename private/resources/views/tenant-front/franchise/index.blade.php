@extends('layouts.tenant-front.pizza')

@section('nav-content')
    <x-tenant_front.nav :franchise="$franchise" type="light"/>

<!-- Cart Sidebar Start -->
 <div class="cart-sidebar-wrapper">
    <aside class="cart-sidebar">
        <div class="cart-sidebar-header">
           <h3>Seu Carrinho</h3>
           <div class="close-btn cart-trigger close-dark">
              <span></span>
              <span></span>
           </div>
        </div>
        <div id="order-cart">

        </div>
     </aside>
     <div class="cart-sidebar-overlay cart-trigger">
     </div>

 </div>

@endsection

@section('footer-content')
    <x-tenant-front.footer />
@endsection


@section('main-content')
    <div class="modal fade" id="order-pizza-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" id="order-pizza">

            </div>
        </div>
    </div>

    <x-tenant-front.alert />
    <!-- Menu Wrapper Start -->
    <div class="section section-padding">
    <div class="container">
        <h1 class="pdh1">Pizzas</h1>
        <div class="menu-container row menu-v2">

        <!-- Product Start -->
        @foreach ($franchise->pizzaSizes as $size)
        <div class="col-lg-4 col-md-6 pizzas offers">
            <div class="product">
                <div class="product-thumb" > <img src="{{asset('pizza-slices/assets/img/prods-sm/2.png')}}" alt="menu item" /> </div>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <div>{{ $size->name }}</div> </h4>
                    <p>{{ $size->description }}</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">R$ {{ $size->price }} *</p>
                    <button class="add-pizza-to-cart btn-custom btn-sm shadow-none" onclick="selectPizzaFlavorsAndBorder(this)" value="{{ $size->id }}">Adicionar ao carrinho</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        <!-- Product End -->
        <!-- Product Start --
        <div class="col-lg-4 col-md-6 pizzas">
            <div class="product">
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/3.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">Pizza Grande</a> </h4>
                    <p>Pizza Grande de 12 pedaços</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">R$ 13,99</p>
                    <a href="#customizeModal" data-toggle="modal" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->

        </div>
        <h1 class="pdh1">Bebidas</h1>
        <div class="menu-container row menu-v2">
        <!-- Product Start -->
        <div class="col-lg-4 col-md-6 beverages desserts">
            <div class="product">
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/13.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">Coca Cola</a> </h4>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">R$ 3,99</p>
                    <a href="#" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->
        <!-- Product Start -->
        <div class="col-lg-4 col-md-6 beverages offers">
            <div class="product">
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/10.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">Cerveja</a> </h4>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">14,99$</p>
                    <a href="#" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->
        </div>
        <h1 class="pdh1">Sobremesas</h1>
        <div class="menu-container row menu-v2">
        <!-- Product Start -->
        <div class="col-lg-4 col-md-6 desserts">
            <div class="product">
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/12.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">Chocolate Cookies</a> </h4>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">4,99$</p>
                    <a href="#" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->
        </div>
        <h1 class="pdh1">Acompanhamentos</h1>
        <div class="menu-container row menu-v2">
        <!-- Product Start -->
        <div class="col-lg-4 col-md-6 pasta">
            <div class="product">
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/11.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">Sea Food Pasta</a> </h4>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">14,99$</p>
                    <a href="#" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->
        <!-- Product Start -->
        <div class="col-lg-4 col-md-6 salads sides">
            <div class="product">
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/15.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">Ceaser Salad</a> </h4>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">10,99$</p>
                    <a href="#" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->
        <!-- Product Start -->
        <div class="col-lg-4 col-md-6 sides">
            <div class="product">
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/14.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">Chicken Wrap</a> </h4>
                    <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">5,99$</p>
                    <a href="#" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product End -->
        <div class="col-lg-12 col-md-12 sides">
            <p>* Valor mínimo do produto, poderá ter valores diferenciados para os sabores.</p>
        </div>
        </div>
    </div>
    </div>

    <div id="demo"></div>
@endsection

@section('scripts-content')
<script>
    function getCSRFToken() {
        return "{{ csrf_token() }}";
    }

    function getOrderCartData() {
        let url = "{{ route('tenant-front.franchise.cart.index', [$franchise->tenant->url_prefix, $franchise->url_prefix]) }}";
        $.ajax({
            url: url,
            type: 'post',
            data: {
                "_token": getCSRFToken(),
            },

            success: function (response) {
                $("#order-cart").html(response);
            },

            error: function (e) {
                alert("Something went wrong.")
                console.log(e)
            }
        });
    }

    $(document).ready(function () {
        getOrderCartData()
    });

    function selectPizzaFlavorsAndBorder(pizza_size_id) {
        let url = "{{ route('tenant-front.franchise.pizza.get-flavors-and-borders', [$franchise->tenant->url_prefix, $franchise->url_prefix]) }}";
        $.ajax({
            url: url,
            type: 'post',
            data: {
                "_token": getCSRFToken(),
                "pizza_size_id": pizza_size_id.value,
            },

            success: function (response) {
                $("#order-pizza").html(response);
                $("#order-pizza-modal").modal("show");
            },

            error: function (e) {
                alert("Something went wrong.")
                console.log(e)
            }
        });
    }

    function deletePizzaFromCart(pizza_index)  {
        let url = "{{ route('tenant-front.franchise.cart.pizza.delete',[$franchise->tenant->url_prefix,$franchise->url_prefix]) }}";
        $.ajax({
            url: url,
            type: 'post',
            data: {
                "_token": getCSRFToken(),
                "pizza_index": pizza_index.value,
            },

            success: function (response) {
                $("#order-cart").html(response);
            },

            error: function (e) {
                alert("Something went wrong.")
                console.log(e)
            }
        });
    }
</script>
@endsection

