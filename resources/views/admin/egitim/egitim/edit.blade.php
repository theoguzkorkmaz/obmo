<h1>Eğitim - Update</h1>

<form method="POST" action="/admin/egitim/egitims/{{$egitim->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
      <label for="ad">kategori_id</label>
      <input type="text" name="kategori_id" value="{{$egitim->kategori_id}}" />
      @error('kategori_id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror
  </div>

  <div class="mb-6"> 
    <label for="baslik">baslik</label>
    <input type="text" name="baslik" value="{{$egitim->baslik}}" />
    @error('baslik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icerik">içerik</label>
    <input type="text" name="icerik" value="{{$egitim->icerik}}" />
    @error('icerik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim">Resim</label>
    <input type="file" name="resim"/>
    <br>
    <img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
    @error('resim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim_aciklama">resim_aciklama</label>
    <input type="text" name="resim_aciklama" value="{{$egitim->resim_aciklama}}" />
    @error('resim_aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="etiket">etiket</label>
    <input type="text" name="etiket" value="{{$egitim->etiket}}" />
    @error('etiket')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <button type="submit">
      Güncelle
  </button> 
</form>