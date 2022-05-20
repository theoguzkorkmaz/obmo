<h1>egitim - Create</h1>

<form method="POST" action="/admin/egitim/egitims" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
      <label for="ad">kategori_id</label>
      <input type="text" name="kategori_id" value="{{old('kategori_id')}}" />
      @error('kategori_id')
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
    <label for="icerik">içerik</label>
    <input type="text" name="icerik" value="{{old('icerik')}}" />
    @error('icerik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim">Resim</label>
    <input type="file" name="resim"/>
    @error('resim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim_aciklama">resim_aciklama</label>
    <input type="text" name="resim_aciklama" value="{{old('resim_aciklama')}}" />
    @error('resim_aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="etiket">etiket</label>
    <input type="text" name="etiket" value="{{old('etiket')}}" />
    @error('etiket')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="kitle">kitle</label>
    <input type="text" name="kitle" value="{{old('kitle')}}" />
    @error('kitle')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="kazanim">kazanim</label>
    <input type="text" name="kazanim" value="{{old('kazanim')}}" />
    @error('kazanim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>
  
  <div class="mb-6">
    <label for="dokuman">dokuman</label>
    <input type="text" name="dokuman" value="{{old('dokuman')}}" />
    @error('dokuman')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="sss">sss</label>
    <input type="text" name="sss" value="{{old('sss')}}" />
    @error('sss')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <button type="submit">
      Oluştur
  </button> 
</form>