 <!-- Cart Sidebar End -->
    @php
        if(isset($franchise))
            $order_session_cart = session()->get("order-cart-" . $franchise->id);
        else
            $order_session_cart = null;
    @endphp
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
    <a class="navbar-brand" href="index.html"> <img src="{{asset('pizza/assets/img/logo.png')}}" alt="logo"> </a>
    <div class="aside-scroll">
       <ul>
          <li class="menu-item">
             <a href="contact-us.html">{{ __('system.commom.home') }}</a>
          </li>
          <li class="menu-item">
             <a href="contact-us.html">{{ __('system.commom.location') }}</a>
          </li>

       </ul>
    </div>
 </aside>
 <div class="aside-overlay aside-trigger"></div>
 <!-- Header Start -->


 <header class="main-header header-1 header-absolute {{ $type == 'black'? 'header-black' : 'header-light'}}">
    <div class="container">
       <nav class="navbar">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html"> <img src="{{asset('pizza-slices/assets/img/logo-light.png')}}" alt="logo"> </a>
          <!-- Menu -->
          <ul class="navbar-nav">
             <li class="menu-item">
                <a href="">{{ __('system.commom.home') }}</a>
             </li>
             <li class="menu-item">
                <a href="localizacao">{{ __('system.commom.location') }}</a>
             </li>
          </ul>
          <div class="header-controls">
             <ul class="header-controls-inner">
                <li class="cart-dropdown-wrapper cart-trigger">
                    <span class="cart-item-count">{{ $order_session_cart == null ? "0" : $order_session_cart->totalQuantity }}</span>
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

 <!-- Subheader Start -->
 <div class="subheader dark-overlay dark-overlay-2" style="background-image: url('{{asset('pizza-slices/assets/img/subheader.jpg')}}')">
    <div class="container">
        <h1>{{ $franchise->tenant->corporative_name }}</h1>
        <div class="subheader-inner">
        <h1></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Unidade {{ $franchise->name }}</li>
                <li class="openOrClosedFranchiseHome openedfranchiseHome">Aberto</li>
            </ol>
            <p class="minimumOrder">{{ $franchise->state }}, {{ $franchise->city }}, {{ $franchise->neighborhood }}, {{ $franchise->address }}</p>
            <p class="minimumOrder">Pedido mínimo de R$ 20,00</p>
        </nav>
        </div>

    </div>
</div>
<!-- Subheader End -->
