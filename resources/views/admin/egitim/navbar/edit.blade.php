<h1>navbar - Edit</h1>

<form method="POST" action="/admin/egitim/egitim_navbars/{{$navbar->id}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  
  <div class="mb-6">
    <label for="ad">ad</label>
    <input type="text" name="ad" value="{{$navbar->ad}}" />
    @error('ad')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
      <label for="icon">icon</label>
      <input type="text" name="icon" value="{{$navbar->icon}}" />
      @error('icon')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
      @enderror 
  </div>

  <div class="mb-6">
    <label for="link">link</label>
    <input type="text" name="link" value="{{$navbar->link}}" />
    @error('link')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror 
</div>

  <div class="mb-6">
    <label for="icerik">icerik</label>
    <input type="text" name="icerik" value="{{$navbar->icerik}}" />
    @error('icerik')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>

  <div class="mb-6">
    <label for="ismenu">ismenu</label>
    <input type="text" name="ismenu" value="{{$navbar->ismenu}}" />
    @error('ismenu')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
    @enderror
  </div>
 
  <button type="submit">
      Edit
  </button> 
</form>