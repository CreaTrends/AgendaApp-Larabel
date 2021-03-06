<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont.css') }}" rel="stylesheet">
    @yield('styles')
   
</head>
<body>

    <!-- Incluimos navbar -->
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                @include('_includes.nav.main')
                @include('_includes.nav.manage')
            @else
            @endauth
        </div>
    @endif
    
    <div id="app">
        
        @yield('content')
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--@include('_includes.notifications.toast')-->
    @yield('scripts')
</body>
</html>
