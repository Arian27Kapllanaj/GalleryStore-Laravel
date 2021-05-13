<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="//unpkg.com/vue-renderless-carousel@1.2.0/dist/index.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .auth-col-slider {
            background-color: #64bc8c;
        }

        .btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
            background-color: #63c8e7 !important;
            border-color: #63c8e7 !important;
        }

        .auth-password-field {
            position: relative;
        }

        .auth-password-field a {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: #6c757d;
        }

        .carousel {
            position: relative;
        }

        .carousel .VueCarousel-slide {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .carousel img {
            max-width: 80%;
            max-height: 100%;
        }

        .carousel h4 {
            margin-bottom: 0.25rem;
        }

        .VueCarousel {
            padding-bottom: 100px;
        }

        .carousel .VueCarousel-wrapper {
            flex-grow: 1;
        }

        .carousel-desc {
            position: absolute;
            width: 80%;
            top: calc(100% - 70px);
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #fff;
        }

        .carousel-desc h2 {
            font-weight: bold;
        }

        .VueCarousel-inner {
            height: 100% !important;
        }

        .carousel-desc p {

        }

        .VueCarousel-pagination {
            position: absolute;
            top: calc(100% + 20px);
        }

        .VueCarousel-dot-container {
            margin-top: 0 !important;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
