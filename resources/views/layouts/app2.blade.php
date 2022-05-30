<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>O B M O</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex flex-column justify-content-center" style="">
        <div class="container p-md-0" id="ara">
            <div class="ara-brand">
                <span>O B M O</span>
                <span>🤗 {{$user}}</span>     
                                 
            </div><!-- /ara-brand -->                 
        </div><!-- /ara --> 
    
        <div id="app">        
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
