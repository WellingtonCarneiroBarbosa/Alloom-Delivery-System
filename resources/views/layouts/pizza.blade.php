<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body>
    <header>
        @yield('nav-content')
    </header>

    @yield('main-content')

    <footer>
        @yield('footer-content')
    </footer>
</body>
</html>
