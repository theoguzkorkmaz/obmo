<h1>Kategori - Edit</h1>

<form method="POST" action="/admin/egitim/egitim_kategoris/{{$kategori->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
      <label for="baslik">baslik</label>
      <input type="text" name="baslik" value="{{$kategori->baslik}}" />
      @error('baslik')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror
  </div>

  <div class="mb-6">
    <label for="aciklama">Açıklama</label>
    <input type="text" name="aciklama" value="{{$kategori->aciklama}}" />
    @error('aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim">resim</label>
    <input type="file" name="resim"/>
    <br>
    <img src="{{$kategori->resim ? asset('storage/'.$kategori->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
    @error('resim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim_aciklama">resim_aciklama</label>
    <input type="text" name="resim_aciklama" value="{{$kategori->resim_aciklama}}" />
    @error('resim_aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icon">icon</label>
    <input type="text" name="icon" value="{{$kategori->icon}}" />
    @error('icon')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>
  

  <button type="submit">
      Güncelle
  </button> 
</form>