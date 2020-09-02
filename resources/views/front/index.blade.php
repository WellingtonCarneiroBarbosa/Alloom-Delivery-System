<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{ $tenant->company_name }}</title>
      <!-- Vendor Stylesheets -->
      <link rel="stylesheet" href="{{asset('pizza/assets/css/plugins/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('pizza/assets/css/plugins/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('pizza/assets/css/plugins/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('pizza/assets/css/plugins/slick.css')}}">
      <link rel="stylesheet" href="{{asset('pizza/assets/css/plugins/slick-theme.css')}}">
      <!-- Icon Fonts -->
      <link rel="stylesheet" href="{{asset('pizza/assets/fonts/flaticon/flaticon.css')}}">
      <link rel="stylesheet" href="{{asset('pizza/assets/fonts/font-awesome/css/all.min.css')}}">
      <!-- Slices Style sheet -->
      <link rel="stylesheet" href="{{asset('pizza/assets/css/style.css')}}">
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{asset('pizza/favicon.ico')}}">

   </head>
   <body>
      <!-- Preloader Start -->
      <div class="ct-preloader">
         <div class="ct-preloader-inner">
            <div class="lds-ripple">
               <div></div>
               <div></div>
            </div>
         </div>
      </div>


      @foreach($tenant->products as $product)
        {{ $product->name }}
      @endforeach
      <!-- Preloader End -->
      <!-- Customize Modal Start -->
      <div class="modal fade" id="customizeModal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header modal-bg" style="background-image: url('pizza/assets/img/blog/11.jpg')">
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
            <div class="cart-sidebar-body">
               <div class="cart-sidebar-scroll">
                  <div class="cart-sidebar-item">
                     <div class="media">
                        <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/1.png" alt="product"></a>
                        <div class="media-body">
                           <h5> <a href="menu-item-v1.html" title="Pepperoni">Pepperoni</a> </h5>
                           <span>4x 9.99$</span>
                        </div>
                     </div>
                     <div class="cart-sidebar-item-meta">
                        <span>14 Inches</span>
                        <span>Extra Cheese</span>
                        <span>Cheese Crust</span>
                     </div>
                     <div class="cart-sidebar-price">
                        R$ 36,99
                     </div>
                     <div class="close-btn">
                        <span></span>
                        <span></span>
                     </div>
                  </div>
                  <div class="cart-sidebar-item">
                     <div class="media">
                        <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/2.png" alt="product"></a>
                        <div class="media-body">
                           <h5> <a href="menu-item-v1.html" title="Vegetarian">Vegetarian</a> </h5>
                           <span>2x 5.99$</span>
                        </div>
                     </div>
                     <div class="cart-sidebar-item-meta">
                        <span>14 Inches</span>
                     </div>
                     <div class="cart-sidebar-price">
                        12.99$
                     </div>
                     <div class="close-btn">
                        <span></span>
                        <span></span>
                     </div>
                  </div>
                  <div class="cart-sidebar-item">
                     <div class="media">
                        <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/3.png" alt="product"></a>
                        <div class="media-body">
                           <h5> <a href="menu-item-v1.html" title="Italian Jalapeno Special">Italian Jalapeno Special</a> </h5>
                           <span>1x 12.99$</span>
                        </div>
                     </div>
                     <div class="cart-sidebar-item-meta">
                        <span>14 Inches</span>
                        <span>Extra Cheese</span>
                        <span>Cheese Crust</span>
                     </div>
                     <div class="cart-sidebar-price">
                        12.99$
                     </div>
                     <div class="close-btn">
                        <span></span>
                        <span></span>
                     </div>
                  </div>
                  <div class="cart-sidebar-item">
                     <div class="media">
                        <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/4.png" alt="product"></a>
                        <div class="media-body">
                           <h5> <a href="menu-item-v1.html" title="Barbeque Chicken">Barbeque Chicken</a> </h5>
                           <span>4x 9.99$</span>
                        </div>
                     </div>
                     <div class="cart-sidebar-item-meta">
                        <span>12 Inches</span>
                        <span>Extra Cheese</span>
                        <span>Cheese Crust</span>
                        <span>Added Chicken</span>
                     </div>
                     <div class="cart-sidebar-price">
                        36.99$
                     </div>
                     <div class="close-btn">
                        <span></span>
                        <span></span>
                     </div>
                  </div>
                  <div class="cart-sidebar-item">
                     <div class="media">
                        <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/5.png" alt="product"></a>
                        <div class="media-body">
                           <h5> <a href="menu-item-v1.html" title="Four Cheese">Four Cheese</a> </h5>
                           <span>2x 5.99$</span>
                        </div>
                     </div>
                     <div class="cart-sidebar-item-meta">
                        <span>12 Inches</span>
                        <span>Added Chicken</span>
                     </div>
                     <div class="cart-sidebar-price">
                        12.99$
                     </div>
                     <div class="close-btn">
                        <span></span>
                        <span></span>
                     </div>
                  </div>
                  <div class="cart-sidebar-item">
                     <div class="media">
                        <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/6.png" alt="product"></a>
                        <div class="media-body">
                           <h5> <a href="menu-item-v1.html" title="Swiss Mushroom">Swiss Mushroom</a> </h5>
                           <span>1x 12.99$</span>
                        </div>
                     </div>
                     <div class="cart-sidebar-item-meta">
                        <span>12 Inches</span>
                        <span>Extra Cheese</span>
                        <span>Cheese Crust</span>
                        <span>Added Chicken</span>
                     </div>
                     <div class="cart-sidebar-price">
                        12.99$
                     </div>
                     <div class="close-btn">
                        <span></span>
                        <span></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cart-sidebar-footer">
               <h4>Total: <span>299.99$</span> </h4>
               <a href="#" class="btn-custom">Checkout</a>
            </div>
         </aside>
         <div class="cart-sidebar-overlay cart-trigger">
         </div>
      </div>
      <!-- Cart Sidebar End -->
      <!-- Search Form Start-->
      <div class="search-form-wrapper">
         <div class="search-trigger close-btn">
            <span></span>
            <span></span>
         </div>
         <form class="search-form" method="post">
            <input type="text" placeholder="Search..." value="">
            <button type="submit" class="search-btn">
            <i class="flaticon-magnifying-glass"></i>
            </button>
         </form>
      </div>
      <!-- Search Form End-->
      <!-- Aside (Mobile Navigation) -->
      <aside class="main-aside">
         <a class="navbar-brand" href="index.html"> <img src="pizza/assets/img/logo.png" alt="logo"> </a>
         <div class="aside-scroll">
            <ul>
               <li class="menu-item">
                  <a href="contact-us.html">Contact Us</a>
               </li>
               <li class="menu-item">
                  <a href="contact-us.html">Contact Us</a>
               </li>
               <li class="menu-item">
                  <a href="contact-us.html">Contact Us</a>
               </li>
               menu-item">
               <a href="contact-us.html">Contact Us</a>
               </li>
               <li class="menu-item">
                  <a href="contact-us.html">Contact Us</a>
               </li>
            </ul>
         </div>
      </aside>
      <div class="aside-overlay aside-trigger"></div>
      <!-- Header Start -->
      <header class="main-header header-1 header-absolute header-light">
         <div class="container">
            <nav class="navbar">
               <!-- Logo -->
               <a class="navbar-brand" href="index.html"> <img src="pizza/assets/img/logo-light.png" alt="logo"> </a>
               <!-- Menu -->
               <ul class="navbar-nav">
                  <li class="menu-item">
                     <a href="contact-us.html">Página Inicial</a>
                  </li>
                  <li class="menu-item">
                     <a href="contact-us.html">Localização</a>
                  </li>
               </ul>
               <div class="header-controls">
                  <ul class="header-controls-inner">
                     <li class="cart-dropdown-wrapper cart-trigger">
                        <span class="cart-item-count">4</span>
                        <i class="flaticon-shopping-bag"></i>
                     </li>
                     <li class="search-dropdown-wrapper search-trigger">
                        <i class="flaticon-search"></i>
                     </li>
                  </ul>
                  <!-- Toggler -->
                  <div class="aside-toggler aside-trigger">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <!-- Header End -->
      <!-- Subheader Start -->
      <div class="subheader dark-overlay dark-overlay-2" style="background-image: url('pizza/assets/img/subheader.jpg')">
         <div class="container">
            <div class="subheader-inner">
               <h1>{{ $tenant->company_name }}</h1>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">{{ $tenant->company_name }}</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Centro</li>
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
               <div class="col-lg-4 col-md-6 pizzas offers">
                  <div class="product">
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/2.png" alt="menu item" /> </a>
                     <div class="product-body">
                        <div class="product-desc">
                           <h4> <a href="menu-item-v1.html">Pizza Pequena </a> </h4>
                           <p>Pizza Pequena de 4 pedaços</p>
                        </div>
                        <div class="product-controls">
                           <p class="product-price">R$ 9,99</p>
                           <a href="#customizeModal" data-toggle="modal"  class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Product End -->
               <!-- Product Start -->
               <div class="col-lg-4 col-md-6 pizzas">
                  <div class="product">
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/5.png" alt="menu item" /> </a>
                     <div class="product-body">
                        <div class="product-desc">
                           <h4> <a href="menu-item-v1.html">Pizza Média</a> </h4>
                           <p>Pizza Média de 8 pedaços</p>
                        </div>
                        <div class="product-controls">
                           <p class="product-price">R$ 12,99</p>
                           <a href="#customizeModal" data-toggle="modal" class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Product End -->
               <!-- Product Start -->
               <div class="col-lg-4 col-md-6 pizzas">
                  <div class="product">
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/3.png" alt="menu item" /> </a>
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
               <!-- Product Start -->
               <div class="col-lg-4 col-md-6 pizzas">
                  <div class="product">
                     <div class="favorite">
                        <i class="far fa-heart"></i>
                     </div>
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/3.png" alt="menu item" /> </a>
                     <div class="product-body">
                        <div class="product-desc">
                           <h4> <a href="menu-item-v1.html">Pizza Gigante</a> </h4>
                           <p>Pizza Gigante de 16 pedaços</p>
                        </div>
                        <div class="product-controls">
                           <p class="product-price">R$ 15,99</p>
                           <a href="#customizeModal" data-toggle="modal"  class="Adicionar ao carrinho-item btn-custom btn-sm shadow-none">Adicionar ao carrinho<i class="fas fa-shopping-cart"></i> </a>
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
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/13.png" alt="menu item" /> </a>
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
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/10.png" alt="menu item" /> </a>
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
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/12.png" alt="menu item" /> </a>
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
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/11.png" alt="menu item" /> </a>
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
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/15.png" alt="menu item" /> </a>
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
                     <a class="product-thumb" href="menu-item-v1.html"> <img src="pizza/assets/img/prods-sm/14.png" alt="menu item" /> </a>
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
      <!-- Menu Wrapper End -->
      <!-- Footer Start -->
      <footer class="ct-footer footer-dark">
         <!-- Top Footer -->
         <div class="container">
            <div class="footer-top">
               <div class="footer-logo">
                  <img src="pizza/assets/img/logo-light.png" alt="logo">
               </div>
            </div>
         </div>

         <!-- Footer Bottom -->
         <div class="footer-bottom">
            <div class="container">
               <ul>
                  <li> <a href="#">Politica de privacidade</a> </li>
                  <li> <a href="#">Politica de Cookies</a> </li>
                  <li> <a href="#">Termos e condições</a> </li>
               </ul>
               <div class="footer-copyright">
                  <p> Copyright &copy; 2020 <a href="http://alloom.com.br">Alloom</a> Todos os direitos reservados. </p>
                  <a href="#" class="back-to-top">Voltar ao topo <i class="fas fa-chevron-up"></i> </a>
               </div>
            </div>
         </div>
      </footer>
      <!-- Vendor Scripts -->


      <script src="{{asset('pizza/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/jquery-3.4.1.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/popper.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/waypoint.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/bootstrap.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/jquery.slimScroll.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/imagesloaded.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/jquery.steps.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/jquery.countdown.min.js')}}"></script>
      <script src="{{asset('pizza/assets/js/plugins/slick.min.js')}}"></script>
      <!-- Slices Scripts -->
      <script src="{{asset('pizza/assets/js/main.js')}}"></script>
   </body>
</html>

