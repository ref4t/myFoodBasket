<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
     

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&amp;display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="/css/shoptheme6/bootstrap.min.css">
        <link rel="stylesheet" href="/css/shoptheme6/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/css/shoptheme6/all.min.css">
        <link rel="stylesheet" href="/css/shoptheme6/swiper-bundle.min.css">
        <link rel="stylesheet" href="/css/shoptheme6/fancybox.css">
        <link rel="stylesheet" href="/css/shoptheme6/animate.min.css">
        <link rel="stylesheet" href="/css/shoptheme6/select2.min.css">
        <link rel="stylesheet" href="/css/shoptheme6/app.css">
        <link rel="stylesheet" href="/css/shoptheme6/responsive.css">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="bg-light hold-transition layout-fixed layout-footer-fixed">
        
        @inertia

        @env ('local')
            {{-- <script src="http://localhost:8080/js/bundle.js"></script> --}}
        @endenv
            <script type="text/javascript" src='/js/theme6/jquery.min.js'></script>
            <script type="text/javascript" src='/js/theme6/moment.min.js'></script>
            <script type="text/javascript" src='/js/theme6/locales.min.js'></script>
            <script type="text/javascript" src='/js/theme6/bootstrap.min.js'></script>
            <script type="text/javascript" src='/js/theme6/bootstrap-datetimepicker.min.js'></script>
            <script type="text/javascript" src='/js/theme6/wow.min.js'></script>
            <script type="text/javascript" src='/js/theme6/fancybox.umd.js'></script>
            <script type="text/javascript" src='/js/theme6/select2.min.js'></script>
            <script type="text/javascript" src='/js/theme6/swiper-bundle.min.js'></script>
    </body>
</html>
