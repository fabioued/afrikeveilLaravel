<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    @include('layouts.style')

</head>

<body @yield('color')>

@include('layouts.header')
<div id="main" >
    <div class="wrapper">
        @if(Auth::Check())
        @include('layouts.aside')
        @endif

            <section id="content">
                <div class="container">
                    @yield('content')
                </div>
            </section>
    </div>
</div>
@include('layouts.scripts')

</body>
</html>
