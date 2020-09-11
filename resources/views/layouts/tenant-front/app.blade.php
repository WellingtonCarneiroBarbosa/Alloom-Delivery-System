<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!-- Vendor Stylesheets -->
        <link rel="stylesheet" href="{{asset('tenant-front/css/plugins/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('tenant-front/css/plugins/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('tenant-front/css/plugins/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('tenant-front/css/plugins/slick.css')}}">
        <link rel="stylesheet" href="{{asset('tenant-front/css/plugins/slick-theme.css')}}">
        <!-- Icon Fonts -->
        <link rel="stylesheet" href="{{asset('tenant-front/fonts/flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('tenant-front/fonts/font-awesome/css/all.min.css')}}">
        <!-- Slices Style sheet -->
        <link rel="stylesheet" href="{{asset('tenant-front/css/style.css')}}">
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('tenant-front/img/favicon.ico')}}">

        <!-- Page Specific Styles -->
        <link rel="stylesheet" href="{{asset('tenant-front/css/plugins/leaflet.css')}}">

        @yield('head-links')
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
     <script src="{{asset('tenant-front/js/plugins/isotope.pkgd.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/jquery-3.4.1.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/popper.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/waypoint.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/bootstrap.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/jquery.slimScroll.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/imagesloaded.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/jquery.steps.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/jquery.countdown.min.js')}}"></script>
     <script src="{{asset('tenant-front/js/plugins/slick.min.js')}}"></script>

     <!-- Slices Scripts -->
     <script src="{{asset('tenant-front/js/main.js')}}"></script>

    <!-- Page Specific Scripts -->
    <script src="{{asset('tenant-front/js/plugins/leaflet.js')}}"></script>
    <script src="{{asset('tenant-front/js/map.js')}}"></script>


    @yield('scripts-content')
</body>
</html>
