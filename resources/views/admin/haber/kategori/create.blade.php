<h1>Kategori - Create</h1>

<form method="POST" action="/admin/haber/haber_kategoris" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
      <label for="ad">Ad</label>
      <input type="text" name="ad" value="{{old('ad')}}" />
      @error('ad')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="aciklama">Açıklama</label>
    <input type="text" name="aciklama" value="{{old('aciklama')}}" />
    @error('aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="yer">resim</label>
    <input type="file" name="resim"/>
    @error('resim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim_aciklama">resim_aciklama</label>
    <input type="text" name="resim_aciklama" value="{{old('resim_aciklama')}}" />
    @error('resim_aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icon">icon</label>
    <input type="text" name="icon" value="{{old('icon')}}" />
    @error('icon')
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