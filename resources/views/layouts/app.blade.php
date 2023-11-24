<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <title>@yield('title') | Musheeda Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Musheeda Solutions" name="keywords">
    <meta content="Musheeda Solutions" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{ asset('front-assets/img/musheeda.png') }}" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Libraries CSS -->
    <link href="{{ asset('front-assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

    <!-- Libraries JS -->
    <script src="{{ asset('front-assets/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('front-assets/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('front-assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('front-assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('front-assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('front-assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Main Javascript -->
    <script src="{{ asset('front-assets/js/main.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</body>

</html>
