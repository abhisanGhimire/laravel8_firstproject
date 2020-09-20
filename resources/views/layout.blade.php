<!DOCTYPE html>

<html class="has-navbar-fixed-top">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Invictus Blog</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
        <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    </head>

    <body>
        @include('partials.navbar')
        <section class="section has-text-centered is-family-monospace">
            <div class="container is-fluid">
                @yield('content')
            </div>
        </section>

        @include('partials.footer')
    </body>

</html>
