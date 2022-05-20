<h1>Topbar - Create</h1>

<form method="POST" action="/admin/haber/haber_topbars" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
      <label for="ad">Ad</label>
      <input type="text" name="ad" value="{{old('ad')}}" />
      @error('ad')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror
  </div>

  <div class="mb-6">
    <label for="link">Link</label>
    <input type="text" name="link" value="{{old('link')}}" />
    @error('link')
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
    <label for="yer">Yer</label>
    <input type="text" name="yer" value="{{old('yer')}}" />
    @error('yer')
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

  <button type="submit">
      Oluştur
  </button> 
</form>