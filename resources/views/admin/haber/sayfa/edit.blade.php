<h1>Sayfa - Edit</h1>

<form method="POST" action="/admin/haber/haber_sayfas/{{$sayfa->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="mb-6">
    <label for="ad">ad</label>
    <input type="text" name="ad" value="{{$sayfa->ad}}" />
    @error('ad')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icerik">içerik</label>
    <input type="text" name="icerik" value="{{$sayfa->icerik}}" />
    @error('icerik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim">Resim</label>
    <img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
    <br>
    <input type="file" name="resim"/>
    @error('resim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="navbar_gorunme">navbar_gorunme</label>
    <input type="text" name="navbar_gorunme" value="{{$sayfa->navbar_gorunme}}" />
    @error('navbar_gorunme')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="footer_gorunme">footer_gorunme</label>
    <input type="text" name="footer_gorunme" value="{{$sayfa->footer_gorunme}}" />
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