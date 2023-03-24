<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>

@include('layouts.header')

    <mainс class="main">
        @yield('content')
    </mainс>

@include('layouts.footer')

<script src="/js/app.js"></script>
</body>
</html>
