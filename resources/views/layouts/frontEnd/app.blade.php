<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    @yield('post_header')

    @include('layouts.frontEnd.style')

    @include('layouts.frontEnd.header')

    @yield('style')
</head>

<body @yield('color')>
@include('layouts.frontEnd.menu')
@yield('content')
@include('layouts.frontEnd.footer')
@include('layouts.frontEnd.scripts')
@yield('scroll')
</body>
</html>
