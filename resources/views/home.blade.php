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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==' crossorigin='anonymous'/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
           
</head>
<body class="home_body w-100">   
    <div class="container d-flex flex-row align-items-end justify-content-end">
        @guest
            <div class="d-flex flex-row justify-content-end w-100">
                <a href="/register" class="btn dark_btn w-25">
                    <i class="fas fa-user-plus    "></i>
                    Kayıt ol
                </a>             
                <a href="/login" class="btn dark_btn w-25">
                    <i class="fas fa-sign-in-alt    "></i>
                    Giriş yap
                </a>
            </div>
        @endguest
        @auth        
        <form action="{{ route('logout') }}" method="post" class="dark_btn2">
            @csrf
            <button type="submit" class="btn dark_btn2 m-auto">                
                <i class="fas fa-sign-out-alt "></i>
                {{auth()->user()->name}}                
            </button>
          </form>
        @endauth
    </div>  
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-center" id="home">        
        <div class="d-flex flex-column flex-md-row gap-4 justify-content-between w-100" id="home_in">
            <div class="d-flex align-items-center justify-content-center home_card2">
                <div class="container p-md-0 text-center" id="ara">
                    <div class="ara-brand2">
                        <span>O B M O</span>   
                    </div><!-- /ara-brand -->                      
                </div><!-- /ara --> 
            </div>
            <a href="/haber" class="d-flex align-items-center justify-content-center home_card">
                <h2>Haber</h2>
                <i class="fas fa-newspaper"></i>
            </a>
            <a href="/egitim" class="d-flex align-items-center justify-content-center home_card">
                <h2>Eğitim</h2>
                <i class="fas fa-school    "></i>
            </a>
            <a href="/admin" class="d-flex align-items-center justify-content-center home_card">
                <h2>Admin</h2>
                <i class="fas fa-user-cog    "></i>
            </a>
        </div>
    </div>     
</body>
</html>