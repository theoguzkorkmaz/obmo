@props(['yorums'])
@props(['yorumsay'])

<div class="w-full" id="yorum">
  <h3 class="baslik">yorumlar</h3>
  
  {{-- <form action="/egitim/egitim_detay/{{$egitim->id}}" method="POST" name="yorum">
    @csrf
    <div class="my-3 mb-4 border py-3 px-4 rounded">
      <div class="mb-2">
        <label for="exampleFormControlInput1">Başlık:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="baslik" placeholder="Yorum başlık giriniz">
      </div>
      <div class="mb-2">
        <label for="exampleFormControlInput2">İçerik:</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="icerik" placeholder="Yorum içerik giriniz">
      </div>
      <div class="input-group d-flex flex-row gap-2 mt-3">
        <button class="btn w-25 border rounded shadow-sm" type="submit">Gönder</button>
        <button class="btn w-25 border rounded shadow-sm" type="clear">Temizle</button>
      </div>
    </div>
  </form> --}}  

  @if ((count($yorumsay) > 0))    
    <div class="card-group d-flex flex-column gap-2 w-full">    
      @foreach($yorums as $yorum)
        @if(count($yorums) != 0)
          <div class="card w-full" >
            <div class="card-title">
              <div>
                <h4 class="mb-1 fw-bold fs-5 mb-2"> {{$yorum->baslik}} </h4>
                <h5 class="mb-1 fs-6"><i class="fas fa-quote-left"></i> {{$yorum->icerik}} <i class="fas fa-quote-right"></i></h5>
              </div>                  
            </div>
            <div class="card-body mt-1">
              <p style="color: #333 !important;">{{$yorum->created_at}} tarihinde yazılmıştır.</p>
            </div>
          </div>
        @endif
      @endforeach
    </div><!-- /card-group -->
  @else
    <p>Bu eğitime henüz yorum yapılmamıştır!</p>
  @endif  
</div><!-- /yorum -->