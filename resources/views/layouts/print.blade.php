<!doctype html>
<html lang="ar" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{asset('assets/img/Els3r logo.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/img/Els3r logo.ico')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <main class="py-3 pe-4" >
            @yield('content')
        </main>
    </div>

    @yield('scripts')

</body>
</html>
