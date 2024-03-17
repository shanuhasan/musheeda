<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <title>@yield('title') | Musheeda Solutions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="{{ asset('front-assets/img/musheeda.png') }}" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libraries CSS -->
    <link href="{{ asset('front-assets/css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('front-assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/flaticon.css') }}" rel="stylesheet">

    <link href="{{ asset('front-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>

    <!-- Libraries JS -->
    <script src="{{ asset('front-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('front-assets/js/scrollax.min.js') }}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('front-assets/js/google-map.js') }}"></script> --}}
    <script src="{{ asset('front-assets/js/main.js') }}"></script>
    <script src="{{ asset('front-assets/js/contact-us.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</body>

</html>
