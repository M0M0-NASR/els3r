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
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">

    <!-- Scripts -->
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('inc.loading') <!-- Include the loading spinner -->

    <div id="app">

        @include('inc.navbar')
        <main class="container py-3 pe-4" >
            @yield('content')
        </main>
        @include('inc.footer')
    </div>

    @yield('scripts')

    <script src="{{asset('assets/js/loading.js')}}"></script>

</body>
</html>
