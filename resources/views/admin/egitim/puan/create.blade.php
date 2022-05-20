<h1>Puan - Edit</h1>

<form method="POST" action="/admin/egitim/egitim_puans" enctype="multipart/form-data">
  @csrf
  <div class="mb-6">
    <label for="sinav_id">sinav_id</label>
    <input type="text" name="sinav_id" value="{{old('sinav_id')}}" />
    @error('sinav_id')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="dogru_sayisi">dogru_sayisi</label>
      <input type="text" name="dogru_sayisi" value="{{old('dogru_sayisi')}}" />
      @error('dogru_sayisi')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="yanlis_sayisi">yanlis_sayisi</label>
    <input type="text" name="yanlis_sayisi" value="{{old('yanlis_sayisi')}}" />
    @error('yanlis_sayisi')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror 
</div>

  <div class="mb-6">
    <label for="puan">puan</label>
    <input type="text" name="puan" value="{{old('puan')}}" />
    @error('puan')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>
 
  <button type="submit">
      Oluştur
  </button> 
</form>