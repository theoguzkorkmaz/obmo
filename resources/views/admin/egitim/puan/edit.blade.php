<h1>Puan - Edit</h1>

<form method="POST" action="/admin/egitim/egitim_puans/{{$puan->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-6">
    <label for="sinav_id">sinav_id</label>
    <input type="text" name="sinav_id" value="{{$puan->sinav_id}}" />
    @error('sinav_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="dogru_sayisi">dogru_sayisi</label>
      <input type="text" name="dogru_sayisi" value="{{$puan->dogru_sayisi}}" />
      @error('dogru_sayisi')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="yanlis_sayisi">yanlis_sayisi</label>
    <input type="text" name="yanlis_sayisi" value="{{$puan->yanlis_sayisi}}" />
    @error('yanlis_sayisi')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror 
</div>

  <div class="mb-6">
    <label for="puan">puan</label>
    <input type="text" name="puan" value="{{$puan->puan}}" />
    @error('puan')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>
 
  <button type="submit">
      Edit
  </button> 
</form>