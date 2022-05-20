<h1>Cevap - Create</h1>

<form method="POST" action="/admin/egitim/egitim_cevaps" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
    <label for="soru_id">soru_id</label>
    <input type="text" name="soru_id" value="{{old('soru_id')}}" />
    @error('soru_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="baslik">cevap_no</label>
      <input type="text" name="cevap_no" value="{{old('baslik')}}" />
      @error('cevap_no')
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
    <label for="dogru">dogru</label>
    <input type="text" name="dogru" value="{{old('dogru')}}" />
    @error('dogru')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>
 
  <button type="submit">
      Olustur
  </button> 
</form>