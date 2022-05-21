<h1>Eğitim - Edit</h1>

<form method="POST" action="/admin/egitim/egitim_sinavs/{{$sinav->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
    <label for="icerik_id">icerik_id</label>
    <input type="text" name="icerik_id" value="{{$sinav->icerik_id}}" />
    @error('icerik_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="baslik">baslik</label>
      <input type="text" name="baslik" value="{{$sinav->baslik}}" />
      @error('baslik')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="aciklama">Açıklama</label>
    <input type="text" name="aciklama" value="{{$sinav->aciklama}}" />
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
      Edit
  </button> 
</form>