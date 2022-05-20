<h1>Sayfa - Create</h1>

<form method="POST" action="/admin/haber/haber_sayfas" enctype="multipart/form-data">
  @csrf

  <div class="mb-6">
    <label for="ad">ad</label>
    <input type="text" name="ad" value="{{old('ad')}}" />
    @error('ad')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icerik">içerik</label>
    <input type="text" name="icerik" value="{{old('icerik')}}" />
    @error('icerik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim">Resim</label>
    <input type="file" name="resim"/>
    @error('resim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="navbar_gorunme">navbar_gorunme</label>
    <input type="text" name="navbar_gorunme" value="{{old('navbar_gorunme')}}" />
    @error('navbar_gorunme')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="footer_gorunme">footer_gorunme</label>
    <input type="text" name="footer_gorunme" value="{{old('footer_gorunme')}}" />
    @error('footer_gorunme')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <button type="submit">
      Oluştur
  </button> 
</form>