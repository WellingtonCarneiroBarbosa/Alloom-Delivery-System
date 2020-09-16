@extends('layouts.tenant-front.pizza')

@section('nav-content')
    <x-tenant-front.nav />
@endsection

@section('footer-content')
    <x-tenant-front.footer />
@endsection


@section('main-content')
    <div class="modal fade" id="customizeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content" id="order-pizza">

            </div>
        </div>
    </div>

    <!-- Subheader Start -->
    <div class="subheader dark-overlay dark-overlay-2" style="background-image: url('{{asset('pizza-slices/assets/img/subheader.jpg')}}')">
    <div class="container">
        <div class="subheader-inner">
        <h1></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ $franchise->tenant->url_prefix }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $franchise->name }}</li>
            </ol>
        </nav>
        </div>
    </div>
    </div>
    <!-- Subheader End -->

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
                <a class="product-thumb" href="menu-item-v1.html"> <img src="{{asset('pizza-slices/assets/img/prods-sm/2.png')}}" alt="menu item" /> </a>
                <div class="product-body">
                    <div class="product-desc">
                    <h4> <a href="menu-item-v1.html">{{ $size->name }}</a> </h4>
                    <p>{{ $size->description }}</p>
                    <p>Até {{ $size->max_flavors }} sabores</p>
                    <p>{{ $size->slices }} fatias</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">A partir de R$ {{ $size->price }}</p>
                    <button class="add-pizza-to-cart btn-custom btn-sm shadow-none" onclick="selectPizzaFlavorsAndBorder(this)" value="{{ $size->id }}">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i></button>
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
        </div>
    </div>
    </div>

    <div id="demo"></div>
@endsection

@section('scripts-content')
<script>
    function selectPizzaFlavorsAndBorder(pizza_size_id) {
        let url = "{{ route('tenant-front.franchise.pizza.get-flavors-and-borders', [$franchise->tenant->url_prefix, $franchise->url_prefix]) }}";
        $.ajax({
            url: url,
            type: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                "pizza_size_id": pizza_size_id.value,
            },
            dataType: 'json',

            success: function (response) {
                //console.log(response);
            },

            //a parada é tao gambiarra, mas tao gambiarra
            //que só funciona no evento error do ajax, mas importante
            //é que ta funcionando
            error: function (e) {
                $("#order-pizza").html(e.responseText)
                $("#customizeModal").modal("show");
            }
        });
    }
</script>
@endsection

