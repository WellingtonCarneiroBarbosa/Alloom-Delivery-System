<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slices - Pizzeria HTML Template</title>

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
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon.ico')}}">

</head>

<body>

  <!-- Preloader Start -->
  <div class="ct-preloader">
    <div class="ct-preloader-inner">
      <div class="lds-ripple"><div></div><div></div></div>
    </div>
  </div>
  <!-- Preloader End -->

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
              36.99$
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
        <li class="menu-item menu-item-has-children">
          <a href="#">Home Pages</a>
          <ul class="submenu">
            <li class="menu-item"> <a href="index.html">Home v1</a> </li>
            <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
            <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
            <li class="menu-item"> <a href="home-v4.html">Home v4</a> </li>
          </ul>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="#">Blog</a>
          <ul class="submenu">
            <li class="menu-item menu-item-has-children">
              <a href="blog-grid.html">Blog Archive</a>
              <ul class="submenu">
                <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                <li class="menu-item"> <a href="blog-masonry.html">Masonry</a> </li>
                <li class="menu-item"> <a href="blog-full-width.html">Full Width</a> </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="blog-single.html">Blog Single</a>
            </li>
          </ul>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="#">Pages</a>
          <ul class="submenu">
            <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
            <li class="menu-item"> <a href="login.html">Login</a> </li>
            <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
            <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
            <li class="menu-item"> <a href="cart.html">Cart</a> </li>

            <li class="menu-item"> <a href="legal.html">Legal</a> </li>
            <li class="menu-item"> <a href="404.html">Error 404</a> </li>
          </ul>
        </li>
        <li class="menu-item menu-item-has-children">
          <a href="#">Menu</a>
          <ul class="submenu">
            <li class="menu-item"> <a href="menu-v1.html">Menu v1</a> </li>
            <li class="menu-item"> <a href="menu-v2.html">Menu v2</a> </li>
            <li class="menu-item"> <a href="menu-item-v1.html">Menu Item v1</a> </li>
            <li class="menu-item"> <a href="menu-item-v2.html">Menu Item v2</a> </li>
          </ul>
        </li>
        <li class="menu-item">
          <a href="locations.html">Locations</a>
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

    <div class="top-header">
      <div class="container">
        <div class="top-header-inner">

          <div class="top-header-contacts">
            <ul class="top-header-nav">
              <li> <a class="p-0" href="tel:+123456789"><i class="fas fa-phone mr-2"></i> +123 456 789</a> </li>
            </ul>
          </div>

          <ul class="top-header-nav header-cta">
            <li> <a href="menu-v1.html">Order Online</a> </li>
          </ul>

        </div>
      </div>
    </div>

    <div class="container">
      <nav class="navbar">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html"> <img src="pizza/assets/img/logo-light.png" alt="logo"> </a>
        <!-- Menu -->
        <ul class="navbar-nav">
          <li class="menu-item menu-item-has-children">
            <a href="#">Home Pages</a>
            <ul class="submenu">
              <li class="menu-item"> <a href="index.html">Home v1</a> </li>
              <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
              <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
              <li class="menu-item"> <a href="home-v4.html">Home v4</a> </li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="#">Blog</a>
            <ul class="submenu">
              <li class="menu-item menu-item-has-children">
                <a href="blog-grid.html">Blog Archive</a>
                <ul class="submenu">
                  <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                  <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                  <li class="menu-item"> <a href="blog-masonry.html">Masonry</a> </li>
                  <li class="menu-item"> <a href="blog-full-width.html">Full Width</a> </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="blog-single.html">Blog Single</a>
              </li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="#">Pages</a>
            <ul class="submenu">
              <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
              <li class="menu-item"> <a href="login.html">Login</a> </li>
              <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
              <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
              <li class="menu-item"> <a href="cart.html">Cart</a> </li>

              <li class="menu-item"> <a href="legal.html">Legal</a> </li>
              <li class="menu-item"> <a href="404.html">Error 404</a> </li>
            </ul>
          </li>
          <li class="menu-item menu-item-has-children mega-menu-wrapper">
            <a href="#">Menu</a>
            <ul class="submenu">
              <li>
                <div class="container">
                  <div class="row">

                    <div class="col-lg-4">
                      <div class="mega-menu-item">
                        <h5>Building a Pizza</h5>
                        <p>
                          Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                          making it over 2000 years old.
                        </p>
                        <a href="menu-item-v2.html" class="btn-custom secondary shadow-none btn-sm">Build your Pizza</a>
                      </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3">
                      <div class="mega-menu-item">
                        <h5>Menu Pages</h5>
                        <a href="menu-v1.html">Menu v1</a>
                        <a href="menu-v2.html">Menu v2</a>
                        <a href="#" class="coming-soon">Menu v3 <span>Coming Soon</span> </a>
                        <a href="#" class="coming-soon">Menu v4 <span>Coming Soon</span> </a>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mega-menu-item">
                        <h5>Menu Item Pages</h5>
                        <a href="menu-item-v1.html">Menu Item v1</a>
                        <a href="menu-item-v2.html">Menu Item v2</a>
                        <a href="#" class="coming-soon">Menu Item v3 <span>Coming Soon</span></a>
                      </div>
                    </div>
                    <div class="col-12 mega-menu-promotion-wrapper">
                      <div class="row">
                        <div class="col-3">
                          <div class="mega-menu-promotion">
                            <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/1.png" alt="pizza"></a>
                            <div class="mega-menu-promotion-text">
                              <h4><a href="menu-item-v1.html">Pepperoni</a></h4>
                              <span>$12.99</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mega-menu-promotion">
                            <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/2.png" alt="pizza"></a>
                            <div class="mega-menu-promotion-text">
                              <h4><a href="menu-item-v1.html">Vegetarian</a></h4>
                              <span>$9.99</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mega-menu-promotion">
                            <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/3.png" alt="pizza"></a>
                            <div class="mega-menu-promotion-text">
                              <h4><a href="menu-item-v1.html">Ham & Cheese</a></h4>
                              <span>$13.99</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="mega-menu-promotion">
                            <a href="menu-item-v1.html"><img src="pizza/assets/img/prods-sm/4.png" alt="pizza"></a>
                            <div class="mega-menu-promotion-text">
                              <h4><a href="menu-item-v1.html">Specialty</a></h4>
                              <span>$13.99</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="locations.html">Locations</a>
          </li>
          <li class="menu-item">
            <a href="contact-us.html">Contact Us</a>
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
  <div class="subheader dark-overlay dark-overlay-2" style="background-image: url('{{asset('pizza/assets/img/subheader.jpg')}}')">
    <div class="container">
      <div class="subheader-inner">
        <h1>Carrinho</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Subheader End -->

  <!--Cart Start -->
  <section class="section">
    <div class="container">

      <!-- Cart Table Start -->
      <table class="ct-responsive-table">
        <thead>
          <tr>
            <th class="remove-item"></th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="cart-product-wrapper">
                <img src="{{asset('pizza/assets/img/prods-sm/1.png')}}" alt="prod1">
                <div class="cart-product-body">
                  <h6> <a href="#">Pepperoni</a> </h6>
                  <p>21 Inch</p>
                  <p>Extra Cheese</p>
                  <p>Extra Pepperoni</p>
                  <p>Cheese Crust</p>
                  <p>Added Bacon</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>12.99$</strong> </td>
            <td class="quantity" data-title="Quantity">
              <input type="number" class="qty form-control" value="1">
            </td>
            <td data-title="Total"> <strong>12.99$</strong> </td>
          </tr>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="cart-product-wrapper">
                <img src="{{asset('pizza/assets/img/prods-sm/5.png')}}" alt="prod1">
                <div class="cart-product-body">
                  <h6> <a href="#">Vegetarian</a> </h6>
                  <p>14 Inch</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>9.99$</strong> </td>
            <td class="quantity" data-title="Quantity">
              <input type="number" class="qty form-control" value="1">
            </td>
            <td data-title="Total"> <strong>9.99$</strong> </td>
          </tr>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="cart-product-wrapper">
                <img src="{{asset('pizza/assets/img/prods-sm/3.png')}}" alt="prod1">
                <div class="cart-product-body">
                  <h6> <a href="#">Four Cheese</a> </h6>
                  <p>21 Inch</p>
                  <p>Extra Cheese</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>13.99$</strong> </td>
            <td class="quantity" data-title="Quantity">
              <input type="number" class="qty form-control" value="1">
            </td>
            <td data-title="Total"> <strong>13.99$</strong> </td>
          </tr>

        </tbody>
      </table>
      <!-- Cart Table End -->

      <!-- Coupon Code Start -->
      <div class="row">
        <div class="col-lg-5">
          <div class="form-group mb-0">
            <div class="input-group mb-0">
              <input type="text" class="form-control" placeholder="Adicionar código promocional" aria-label="Coupon Code">
              <div class="input-group-append">
                <button class="btn-custom shadow-none" type="button">Aplicar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Coupon Code End -->

      <!-- Cart form Start -->
      <div class="row ct-cart-form">
        <div class="offset-lg-6 col-lg-6">
          <h4>Resumo da compra</h4>
          <table>
            <tbody>
              <tr>
                <th>Subtotal</th>
                <td>R$ 90,99</td>
              </tr>
              <tr>
                <th>Taxa</th>
                <td>R$ 9,99 </td>
              </tr>
              <tr>
                <th>Total</th>
                <td> <b>R$ 99,99</b> </td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn-custom primary btn-block">Finalizar Compra</a>
        </div>
      </div>
      <!-- Cart form End -->

    </div>
  </section>
  <!-- Cart End -->

  <!-- Footer Start -->
  <footer class="ct-footer footer-dark">
    <!-- Top Footer -->
    <div class="container">
      <div class="footer-top">
        <div class="footer-logo">
          <img src="{{asset('pizza/assets/img/logo-light.png')}}" alt="logo">
        </div>
        <div class="footer-buttons">
          <a href="#"> <img src="pizza/assets/img/android.png" alt="download it on the app store"></a>
          <a href="#"> <img src="pizza/assets/img/ios.png" alt="download it on the app store"></a>
        </div>
      </div>
    </div>

    <!-- Middle Footer -->


    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <ul>
          <li> <a href="#">Privacy Policy</a> </li>
          <li> <a href="#">Refund Policy</a> </li>
          <li> <a href="#">Cookie Policy</a> </li>
          <li> <a href="#">Terms & Conditions</a> </li>
        </ul>
        <div class="footer-copyright">
          <p> Copyright &copy; 2020 <a href="#">ALLOOM</a> All Rights Reserved. </p>
          <a href="#" class="back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="{{asset('pizza/assets/js/plugins/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/popper.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/waypoint.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/bootstrap.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/jquery.slimScroll.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/imagesloaded.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/jquery.steps.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('pizza/assets/js/plugins/slick.min.js')}}"></script>

  <!-- Slices Scripts -->
  <script src="{{asset('pizza/assets/js/main.js')}}"></script>

</body>


</html>
