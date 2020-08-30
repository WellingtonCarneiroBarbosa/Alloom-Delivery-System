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
    <link type="text/css" href="{{ asset('vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/prismjs/themes/prism.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/jqvmap/dist/jqvmap.min.css') }}">
    <link type="text/css" href="{{ asset('css/rocket.css') }}" rel="stylesheet">

    @yield('head-content')
</head>

<body>
    @yield('nav-content')
    <main>
        @yield('main-content')

        @yield('footer-content')
    </main>
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
    <script src="{{ asset('assets/js/rocket.js') }}"></script>

    @yield('script-content')
</body>

</html>
