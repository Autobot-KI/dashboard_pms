<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('detox/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/imagebg.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('detox/assets/css/responsive.css') }}" rel="stylesheet">

    @stack('after-styles')

    <x-google-analytics />
</head>

<body>

    <main>
        @yield('content')
    </main>

</body>

<!-- Scripts -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


</html>