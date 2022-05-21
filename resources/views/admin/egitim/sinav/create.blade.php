<h1>İçerik - Create</h1>

<form method="POST" action="/admin/egitim/egitim_sinavs" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
    <label for="icerik_id">icerik_id</label>
    <input type="text" name="icerik_id" value="{{old('icerik_id')}}" />
    @error('icerik_id')
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
    <label for="aciklama">Açıklama</label>
    <input type="text" name="aciklama" value="{{old('aciklama')}}" />
    @error('aciklama')
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