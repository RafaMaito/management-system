<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Management System - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        @include('site.layouts._partials.header')
        @yield('content')
        @unless (Route::is('site.home'))
            @include('site.layouts._partials.footer')
        @endunless
    </body>
</html>
