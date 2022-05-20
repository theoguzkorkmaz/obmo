<h1>Yorum - Create</h1>

<form method="POST" action="/admin/haber/haber_yorums" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
      <label for="haber_id">Haber_id</label>
      <input type="text" name="haber_id" value="{{old('haber_id')}}" />
      @error('haber_id')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror
  </div>

  <div class="mb-6">
    <label for="user_id">user_id</label>
    <input type="text" name="user_id" value="{{old('user_id')}}" />
    @error('user_id')
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
    <label for="onay">onay</label>
    <input type="text" name="onay" value="{{old('onay')}}" />
    @error('onay')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <button type="submit">
      Oluştur
  </button> 
</form>