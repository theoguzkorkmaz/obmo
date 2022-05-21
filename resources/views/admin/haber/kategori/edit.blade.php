<h1>Kategori - Edit</h1>

<form method="POST" action="/admin/haber/haber_kategoris/{{$kategori->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
      <label for="ad">Ad</label>
      <input type="text" name="ad" value="{{$kategori->ad}}" />
      @error('ad')
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
    <label for="resim">Yer</label>
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
  
  <div class="mb-6">
    <label for="navbar_gorunme">navbar_gorunme</label>
    <input type="text" name="navbar_gorunme" value="{{$kategori->navbar_gorunme}}" />
    @error('navbar_gorunme')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="footer_gorunme">footer_gorunme</label>
    <input type="text" name="footer_gorunme" value="{{$kategori->footer_gorunme}}" />
    @error('footer_gorunme')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="admin">admin</label>
    <input type="text" name="admin" value="{{auth()->user()->id}}" readonly />
    <small>Bu veri <b>{{auth()->user()->name}}</b> tarafından oluşturulacak</small>
    @error('admin')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <button type="submit">
      Güncelle
  </button> 
</form>