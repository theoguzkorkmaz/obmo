<h1>Sosyal - Edit</h1>

<form method="POST" action="/admin/sosyals/{{$sosyal->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
      <label for="ad">ad</label>
      <input type="text" name="ad" value="{{$sosyal->ad}}" />
      @error('ad')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror
  </div>

  <div class="mb-6">
    <label for="icon">icon</label>
    <input type="text" name="icon" value="{{$sosyal->icon}}" />
    @error('icon')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="link">link</label>
    <input type="text" name="link" value="{{$sosyal->link}}" />
    @error('link')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="aciklama">aciklama</label>
    <input type="text" name="aciklama" value="{{$sosyal->aciklama}}" />
    @error('aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="aktiflik">aktiflik</label>
    <input type="text" name="aktiflik" value="{{$sosyal->aktiflik}}" />
    @error('aktiflik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <button type="submit">
      Güncelle
  </button> 
</form>