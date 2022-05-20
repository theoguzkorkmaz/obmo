<h1>Soru - Create</h1>

<form method="POST" action="/admin/egitim/egitim_sorus/{{$soru->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
    <label for="sinav_id">sinav_id</label>
    <input type="text" name="sinav_id" value="{{$soru->sinav_id}}" />
    @error('sinav_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="soru_no">soru_no</label>
      <input type="text" name="soru_no" value="{{$soru->soru_no}}" />
      @error('soru_no')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="baslik">soru</label>
    <input type="text" name="soru" value="{{$soru->soru}}" />
    @error('soru')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim">resim</label>
    <input type="file" name="resim"/>
    <br>
    <img src="{{$soru->resim ? asset('storage/'.$soru->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
    @error('resim')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="resim_aciklama">resim_aciklama</label>
    <input type="text" name="resim_aciklama" value="{{$soru->resim_aciklama}}" />
    @error('resim_aciklama')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <button type="submit">
      Edit
  </button> 
</form>