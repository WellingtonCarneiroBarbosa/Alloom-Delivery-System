<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
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
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('pizza/assets/img/favicon.ico')}}">

            <!-- Page Specific Styles -->
        <link rel="stylesheet" href="{{asset('pizza/assets/css/plugins/leaflet.css')}}">
        <link rel="stylesheet" href="{{asset('pizza-slices/assets/css/alloom_style.css')}}">


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

     @yield('nav-content')


    @yield('main-content')


     @yield('footer-content')
     <!-- Vendor Scripts -->

     <script src="{{asset('pizza/assets/js/plugins/slick.min.js')}}"></script>
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
     <!-- Slices Scripts -->
     <script src="{{asset('pizza/assets/js/main.js')}}"></script>
         <!-- Page Specific Scripts -->
    <script src="{{asset('pizza/assets/js/plugins/leaflet.js')}}"></script>
    <script src="{{asset('pizza/assets/js/map.js')}}"></script>


</body>
</html>
