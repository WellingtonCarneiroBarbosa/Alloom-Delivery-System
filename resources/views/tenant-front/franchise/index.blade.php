@extends('layouts.tenant-front.pizza')

@section('nav-content')
    <x-tenant-front.nav />
@endsection

@section('footer-content')
    <x-tenant-front.footer />
@endsection


@section('main-content')

    <!-- Preloader End -->
    <!-- Customize Modal Start -->
    <div class="modal fade" id="customizeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="">
            <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close">
            <span></span>
            <span></span>
            </button>
        </div>
        <div class="modal-body">
            <div class="customize-meta">
                <h4 class="customize-title">Pizza Pequena <span class="custom-primary">R$ 13,99</span> </h4>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                </p>
            </div>
            <div class="customize-variations">
                <div class="customize-size-wrapper">
                    <h5>Quantidade de sabores: </h5>
                    <div class="customize-size active">
                    1
                    </div>
                    <div class="customize-size">
                    2
                    </div>
                    <div class="customize-size">
                    3
                    </div>
                </div>
                <div class="row">
                    <!-- Variation End -->
                    <!-- Variation Start -->
                    <div class="col-lg-4 col-12">
                    <div class="customize-variation-wrapper">
                        <i class="flaticon-pizza-slice"></i>
                        <h5>Borda</h5>
                        <div class="customize-variation-item" data-price="4.00">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="cheeseCrust" name="crust" class="custom-control-input">
                                <label class="custom-control-label" for="cheeseCrust">Cheddar</label>
                            </div>
                            <span>+4.00$</span>
                        </div>
                        <div class="customize-variation-item" data-price="3.25">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="butterCrust" name="crust" class="custom-control-input">
                                <label class="custom-control-label" for="butterCrust">Catupiry</label>
                            </div>
                            <span>+3.25$</span>
                        </div>
                    </div>
                    </div>
                    <!-- Variation End -->
                    <!-- Variation Start -->
                    <div class="col-lg-4 col-12">
                    <div class="customize-variation-wrapper">
                        <i class="flaticon-pizza-and-cutted-slice"></i>
                        <h5>Sabores</h5>
                        <div class="customize-variation-item" data-price="2.00">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="addChicken">
                                <label class="custom-control-label" for="addChicken">Frango com catupiry</label>
                            </div>
                            <span>+2.00$</span>
                        </div>
                        <div class="customize-variation-item" data-price="1.20">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="addFourCheese">
                                <label class="custom-control-label" for="addFourCheese">Quatro Queijos</label>
                            </div>
                            <span>+1.20$</span>
                        </div>
                        <div class="customize-variation-item" data-price="0.75">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="addFreshMushroom">
                                <label class="custom-control-label" for="addFreshMushroom">Calabresa</label>
                            </div>
                            <span>+0.75$</span>
                        </div>
                        <div class="customize-variation-item" data-price="0.25">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="addBellPepper">
                                <label class="custom-control-label" for="addBellPepper">Alho e óleo</label>
                            </div>
                            <span>+0.25$</span>
                        </div>
                    </div>
                    </div>
                    <!-- Variation End -->
                </div>
            </div>
            <div class="customize-controls">
                <div class="qty">
                    <span class="qty-subtract"><i class="fas fa-minus"></i></span>
                    <input type="text" name="qty" value="1">
                    <span class="qty-add"><i class="fas fa-plus"></i></span>
                </div>
                <div class="customize-total" data-price="13.99">
                    <h5>Preço Total: <span class="final-price custom-primary"><span>R$</span> 13,99 </span> </h5>
                </div>
            </div>
            <button type="button" class="btn-custom btn-block">Adicionar ao carrinho</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Customize Modal End -->
    <!-- Header End -->
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
                    <p>{{ $size->slices }} fatias</p>
                    </div>
                    <div class="product-controls">
                    <p class="product-price">A partir de R$ {{ $size->price }}</p>
                    <a href="#customizeModal" data-toggle="modal"  class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
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


@endsection
