<h1>Sosyal - Create</h1>

<form method="POST" action="/admin/sosyals" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
      <label for="ad">ad</label>
      <input type="text" name="ad" value="{{old('ad')}}" />
      @error('ad')
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
    <label for="link">link</label>
    <input type="text" name="link" value="{{old('link')}}" />
    @error('link')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="aciklama">aciklama</label>
    <input type="text" name="aciklama" value="{{old('aciklama')}}" />
    @error('aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="aktiflik">aktiflik</label>
    <input type="text" name="aktiflik" value="{{old('aktiflik')}}" />
    @error('aktiflik')
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
      Oluştur
  </button> 
</form>