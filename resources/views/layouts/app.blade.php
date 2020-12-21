<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('welcome.intro1') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- the favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/imgs/favicon.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- my custom --}}
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    {{-- for phone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>

    {{-- fontawsome --}}
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

</head>
<body class="d-flex flex-column min-vh-100">
    <div id="app" class="wrapper flex-grow-1">
        @include('inc.navbar');
        <main class="py-4">
            @yield('content')
        </main>
    </div>

@include('inc.footer');



