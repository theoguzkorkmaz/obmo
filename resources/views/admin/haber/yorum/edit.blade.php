<h1>Yorum - Update</h1>

<form method="POST" action="/admin/haber/haber_yorums/{{$yorum->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
      <label for="haber_id">Haber_id</label>
      <input type="text" name="haber_id" value="{{$yorum->haber_id}}" />
      @error('haber_id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror
  </div>

  <div class="mb-6">
    <label for="user_id">user_id</label>
    <input type="text" name="user_id" value="{{$yorum->user_id}}" />
    @error('user_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="baslik">baslik</label>
    <input type="text" name="baslik" value="{{$yorum->baslik}}" />
    @error('baslik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="icerik">icerik</label>
    <input type="text" name="icerik" value="{{$yorum->icerik}}" />
    @error('icerik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="onay">onay</label>
    <input type="text" name="onay" value="{{$yorum->onay}}" />
    @error('onay')
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
      Güncelle
  </button> 
</form>