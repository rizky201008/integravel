<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @stack('header')
    @vite('resources/css/app.css')
    @vite('resources/sass/app.scss')

    <title>{{ $title ?? env('APP_NAME') }}</title>
</head>

<body data-bs-theme="dark">
    @include('components.navbar')
    <div class="content" style="margin-top: 3.4rem;">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>

</html>
