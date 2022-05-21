<h1>Soru - Create</h1>

<form method="POST" action="/admin/egitim/egitim_sorus" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
    <label for="sinav_id">sinav_id</label>
    <input type="text" name="sinav_id" value="{{old('sinav_id')}}" />
    @error('sinav_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="soru_no">soru_no</label>
      <input type="text" name="soru_no" value="{{old('soru_no')}}" />
      @error('soru_no')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="baslik">soru</label>
    <input type="text" name="soru" value="{{old('soru')}}" />
    @error('soru')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="yer">resim</label>
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