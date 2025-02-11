<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('apps/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Noto+Sans+Javanese:wght@400..700&display=swap" rel="stylesheet">
    <!-- Scripts -->
</head>
<body>
<div class="app-main d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="app-logo">
        <img src="{{ $logo }}" class="img-fluid">
    </div>
    @yield('content')
</div>
<div class="app-footer d-flex flex-column max-vh-20 justify-content-center align-items-center">
    <em>brought to you by <a href="https://github.com/FIK-NAROTAMA/pranala-cekak">Pranala Cekak (<span class="noto-sans-javanese-condensed">ꦥꦿꦤꦭ &nbsp;ꦕꦼꦏꦏ꧀</span>)</a><em>
</div>
</body>
</html>
