<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
    <title>Alloom Delivery - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="Alloom Delivery Pizza">
    <meta name="author" content="Alloom">
    <meta name="description" content="Alloom Delivery Pizza é um sistema online voltado para pizzarias que desejam aumentar sua presença digital e ter uma solução personalizada para receber e gerenciar seus pedidos.">
    <meta name="keywords" content="delivery, gerenciar pedidos, pedidos, sistema de pedidos online, sistema de delivery, gerenciar pedidos online, gerenciar pedidos pizzaria">
    <link rel="canonical" href="{{ route('home.index') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('home.index') }}">
    <meta property="og:title" content="Alloom Delivery Pizza">
    <meta property="og:description" content="Alloom Delivery Pizza é um sistema online voltado para pizzarias que desejam aumentar sua presença digital e ter uma solução personalizada para receber e gerenciar seus pedidos.">
    <meta property="og:image" content="{{ asset('dashboard/assets/img/brand/dark.svg') }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ route('home.index') }}">
    <meta property="twitter:title" content="Alloom Delivery Pizza">
    <meta property="twitter:description" content="Alloom Delivery Pizza é um sistema online voltado para pizzarias que desejam aumentar sua presença digital e ter uma solução personalizada para receber e gerenciar seus pedidos.">
    <meta property="twitter:image" content="{{ asset('dashboard/assets/img/brand/dark.svg') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('dashboard/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dashboard/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('dashboard/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('dashboard/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/dashboard.css') }}" type="text/css">
</head>

<body>
    @yield('nav-content')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @yield('top-nav-content')
        <!-- Header -->
        @yield('header-content')

        <!-- Page content -->
        <div class="container-fluid mt--6">
            @yield('main-content')
        </div>
            <!-- Footer -->
            @yield('footer-content')
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('dashboard/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('dashboard/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('dashboard/assets/js/dashboard.js?v=1.2.0') }}"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="{{ asset('dashboard/assets/js/demo.min.js') }}"></script>
</body>

</html>





{{-- ---- --}}


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Alloom Delivery - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="title" content="Alloom Delivery Pizza">
    <meta name="author" content="Alloom">
    <meta name="description" content="Alloom Delivery Pizza é um sistema online voltado para pizzarias que desejam aumentar sua presença digital e ter uma solução personalizada para receber e gerenciar seus pedidos.">
    <meta name="keywords" content="delivery, gerenciar pedidos, pedidos, sistema de pedidos online, sistema de delivery, gerenciar pedidos online, gerenciar pedidos pizzaria">
    <link rel="canonical" href="{{ route('home.index') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('home.index') }}">
    <meta property="og:title" content="Alloom Delivery Pizza">
    <meta property="og:description" content="Alloom Delivery Pizza é um sistema online voltado para pizzarias que desejam aumentar sua presença digital e ter uma solução personalizada para receber e gerenciar seus pedidos.">
    <meta property="og:image" content="{{ asset('dashboard/assets/img/brand/dark.svg') }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ route('home.index') }}">
    <meta property="twitter:title" content="Alloom Delivery Pizza">
    <meta property="twitter:description" content="Alloom Delivery Pizza é um sistema online voltado para pizzarias que desejam aumentar sua presença digital e ter uma solução personalizada para receber e gerenciar seus pedidos.">
    <meta property="twitter:image" content="{{ asset('dashboard/assets/img/brand/dark.svg') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('dashboard/assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dashboard/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('dashboard/assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('dashboard/assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link type="text/css" href="{{ asset('vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/prismjs/themes/prism.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/jqvmap/dist/jqvmap.min.css') }}">
    <link type="text/css" href="{{ asset('css/rocket.css') }}" rel="stylesheet">

    @yield('head-content')
</head>

<body>
@yield('page-content')
    <x-front.loader />
    <div class="container-fluid bg-soft">
        <div class="row">
            <div class="col-12">
                @yield('nav-content')

                <main class="content">
                    @yield('main-content')
                    @yield('footer-content')
                </main>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/headroom.js/dist/headroom.min.js') }}"></script>
    <script src="{{ asset('vendor/countup.js/dist/countUp.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('vendor/prismjs/prism.js') }}"></script>
    <script src="{{ asset('vendor/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/rocket.js') }}"></script>

    <script>
        /**
         *  Loader script
         *
         */
        $(document).ready(function() {
            /**
             * If has any submit
             *
             */
            $(".form-loader").on("submit", function() {
                /**
                 * upload the page loader
                 *
                 */
                $(".preloader").show();

                /**
                 * block more submits
                 *
                 */
                $("button[type='submit']").attr('disabled', true)
            });
        });
    </script>

    @yield('script-content')
</body>
</html>
