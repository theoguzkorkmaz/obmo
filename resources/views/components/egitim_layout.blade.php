@props(['navbars'])

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>O B M O | Eğitim</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==' crossorigin='anonymous'/>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
  <link href="{{ asset('css/egitim_main.css') }}" rel="stylesheet">
</head>
<body>        
  <div class="container-fluid">
    <div class="row">
      <x-egitim_navbar :navbars="$navbars"></x-egitim_navbar>
      <main class="col-md-10 col-12" id="main">
        <x-egitim_mobile_navbar_opener></x-egitim_mobile_navbar>
        {{$slot}}        
      </main><!-- /main -->
    </div><!-- /row -->
  </div><!-- /container -->

<x-egitim_footer></x-egitim_footer>