<h1>Yorum - Create</h1>

<form method="POST" action="/admin/egitim/egitim_yorums" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
    <label for="egitim_id">egitim_id</label>
    <input type="text" name="egitim_id" value="{{old('egitim_id')}}" />
    @error('egitim_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="kullanici_id">kullanici_id</label>
      <input type="text" name="kullanici_id" value="{{old('kullanici_id')}}" />
      @error('kullanici_id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="baslik">baslik</label>
    <input type="text" name="baslik" value="{{old('baslik')}}" />
    @error('baslik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icerik">icerik</label>
    <input type="text" name="icerik" value="{{old('icerik')}}" />
    @error('icerik')
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