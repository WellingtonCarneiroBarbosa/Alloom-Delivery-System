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
    <meta property="og:image" content="{{ asset('assets/img/brand/dark.svg') }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ route('home.index') }}">
    <meta property="twitter:title" content="Alloom Delivery Pizza">
    <meta property="twitter:description" content="Alloom Delivery Pizza é um sistema online voltado para pizzarias que desejam aumentar sua presença digital e ter uma solução personalizada para receber e gerenciar seus pedidos.">
    <meta property="twitter:image" content="{{ asset('assets/img/brand/dark.svg') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('front/assets/img/favicon/favicon.png') }}" type="image/png">

    <!-- Fontawesome -->
    <link type="text/css" href={{ asset( 'vendor/@fortawesome/fontawesome-free/css/all.min.css') }} rel="stylesheet">

    <!-- Nucleo icons -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">

    <!-- Prism -->
    <link type="text/css" href="{{ asset('vendor/prismjs/themes/prism.css') }}" rel="stylesheet">

    <!-- Front CSS -->
    <link type="text/css" href="{{ asset('front/css/front.css') }}" rel="stylesheet">

    @yield('head-content')
</head>

<body>
    <x-front.loader />

    <header class="header-global">
        @yield('nav-content')
    </header>

    <main>

        @yield('main-content')

        @yield('footer-content')

    </main>

    <!-- Core -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/headroom.js/dist/headroom.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/jarallax/dist/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Impact JS -->
    <script src="{{asset('front/assets/js/front.js') }}"></script>

    <script>
        $(document).ready(function() {
            /**
             * If has any submit
             *
             */
            $(".form-loader").on("submit", function() {

                /**
                 * block more submits
                 *
                 */
                $("button[type='submit']").attr('disabled', true).html("Carregando...")
            });
        });
    </script>

    @yield('script-content')
</body>

</html>

{{-- ---------- --}}
