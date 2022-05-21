<h1>İçerik - Edit</h1>

<form method="POST" action="/admin/egitim/egitim_iceriks/{{$icerik->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
    <label for="egitim_id">egitim_id</label>
    <input type="text" name="egitim_id" value="{{$icerik->egitim_id}}" />
    @error('egitim_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icerik_no">icerik_no</label>
    <input type="text" name="icerik_no" value="{{$icerik->icerik_no}}" />
    @error('icerik_no')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="baslik">baslik</label>
      <input type="text" name="baslik" value="{{$icerik->baslik}}" />
      @error('baslik')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="aciklama">Açıklama</label>
    <input type="text" name="aciklama" value="{{$icerik->aciklama}}" />
    @error('aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="puan">puan</label>
    <input type="text" name="puan" value="{{$icerik->puan}}" />
    @error('puan')
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