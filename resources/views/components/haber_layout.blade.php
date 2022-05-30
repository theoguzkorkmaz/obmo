<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>O B M O | Haber</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' integrity='sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==' crossorigin='anonymous'/>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
  <link href="{{ asset('css/haber_main.css') }}" rel="stylesheet">
  <script src="//unpkg.com/alpinejs" defer></script>  
</head>
<body>   
  <x-haber_topbar :topbars="$topbars"></x-haber_topbar>
  <x-haber_navbar :kategoris="$kategoris" :sayfas="$sayfas"></x-haber_navbar>
  <div class="container p-0 mt-2">
    @if (\Session::has('success'))
      <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3500)" x-show="show" class="alert alert-success w-50" role="alert">
        <div class="d-flex flex-row justify-content-between">
          {!! \Session::get('success') !!}    
          <button @click="show = !show" class="btn p-0 float-right text-white">
            <i class="fas fa-times"></i>  
          </button>    
        </div>    
      </div>
    @endif
  </div>
  {{$slot}}  
  <x-haber_footer :kategoris="$kategoris" :sayfas="$sayfas" :topbars="$topbars" :fhabers="$fhabers" :sosyals="$sosyals"></x-haber_footer>

  <script src="{{ asset('js/darkmode.js') }}"></script>
</body>
</html>