<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{env('APP_NAME')}} - @yield('title_page')</title>
        <meta name="viewport"  content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/svg+xml" href="{{asset('img/atom.svg')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/atom.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('js/syntax-highlighter/styles/shCore.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('js/syntax-highlighter/styles/shThemeRDark.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2&amp;family=Lobster&amp;display=swap" rel="stylesheet">
        @stack('addCSS')

    </head>


    <body>
        @include('Documentation.include.partials._navTop')

        <div id="content">
            @csrf
            @include('Documentation.include.partials._navLeft')
            <div id="content-page">
                @yield('content')
            </div>
        </div>
   
    <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/atom.min.js')}}"></script>
    <script src="{{asset('js/syntax-highlighter/scripts/shCore.js')}}"></script>
    <script src="{{asset('js/syntax-highlighter/scripts/shBrushXml.js')}}"></script>
    <script src="{{asset('js/syntax-highlighter/scripts/shBrushCss.js')}}"></script>
    <script src="{{asset('js/syntax-highlighter/scripts/shBrushJScript.js')}}"></script>
    <script src="{{asset('js/syntax-highlighter/scripts/shBrushPhp.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    @stack('addJS')

    </body>
</html>

