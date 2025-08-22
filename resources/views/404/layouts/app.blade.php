<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - 404</title>
    <meta property="og:title" content="{{ config('app.name') }} - 404" />
    <meta property="og:description" content="URL tidak ditemukan atau sudah kadaluwarsa. Silakan dikonfirmasi pada pemberi URL ini." />
    <meta property="og:type" content="a private URL shortener" />
    <meta property="og:url" content="{{ $url }}" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />

    <link href="{{ asset('apps/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/font/css/bootstrap-icon.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=family=Noto+Sans+Javanese:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @yield('content')
    <nav class="fixed-bottom footer">
        <div class="app-footer d-flex flex-column max-vh-20 justify-content-center align-items-center">
            <span>{{ Str::of(config('app.footer'))->toHtmlString() }}</span>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
