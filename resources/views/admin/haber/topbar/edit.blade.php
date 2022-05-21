<h1>Topbar - Edit</h1>

<form method="POST" action="/admin/haber/haber_topbars/{{$topbar->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
      <label for="ad">Ad</label>
      <input type="text" name="ad" value="{{$topbar->ad}}" />
      @error('ad')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror
  </div>

  <div class="mb-6">
    <label for="link">Link</label>
    <input type="text" name="link" value="{{$topbar->link}}" />
    @error('link')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="aciklama">Açıklama</label>
    <input type="text" name="aciklama" value="{{$topbar->aciklama}}" />
    @error('aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="yer">Yer</label>
    <input type="text" name="yer" value="{{$topbar->yer}}" />
    @error('yer')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>  

  <div class="mb-6">
    <label for="icon">icon</label>
    <input type="text" name="icon" value="{{$topbar->icon}}" />
    @error('icon')
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