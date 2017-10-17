<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{ asset('css/custom.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="green">

    @yield('content')

</div>
@include('layouts.scripts')

</body>
</html>
