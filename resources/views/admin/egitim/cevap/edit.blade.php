<h1>Eğitim - Edit</h1>

<form method="POST" action="/admin/egitim/egitim_cevaps/{{$cevap->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
    <label for="soru_id">soru_id</label>
    <input type="text" name="soru_id" value="{{$cevap->soru_id}}" />
    @error('soru_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="baslik">cevap_no</label>
      <input type="text" name="cevap_no" value="{{$cevap->cevap_no}}" />
      @error('cevap_no')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="icerik">icerik</label>
    <input type="text" name="icerik" value="{{$cevap->icerik}}" />
    @error('icerik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="dogru">dogru</label>
    <input type="text" name="dogru" value="{{$cevap->dogru}}" />
    @error('dogru')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>
 
  <button type="submit">
      Edit
  </button> 
</form>