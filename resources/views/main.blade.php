<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
     

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="/css/mainshop/bootstrap.css">
        <link rel="stylesheet" href="/css/mainshop/theme.css">
        <link rel="stylesheet" href="/css/mainshop/style_new.css">
        <link rel="stylesheet" href="/css/shoptheme1/stylesheet.css" />
        <link rel="stylesheet" href="/css/shoptheme1/news.css" />   

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
        {{-- <script src="/js/jquery-3.6.0.min.js"></script> --}}
        {{-- <script src="/js/bootstrap-3.4.1.min.js"></script> --}}

    </head>

    <body class="bg-light hold-transition layout-fixed layout-footer-fixed">
        
        @inertia

        @env ('local')
            {{-- <script src="http://localhost:8080/js/bundle.js"></script> --}}
        @endenv
    </body>
</html>
