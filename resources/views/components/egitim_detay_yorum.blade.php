@props(['yorums'])
@props(['yorumsay'])
@props(['egitim'])

<div class="w-full" id="yorum">
  <h3 class="baslik">Yorumlar</h3>
  <h6>
    @if ((count($yorumsay)) != 0)
      <p>Bu eğitime <strong>{{count($yorumsay)}} adet</strong> yorum yapılmıştır.</p>
    @else
      <p>Bu eğitime henüz yorum yapılmamıştır.</p>
    @endif    
  </h6>
  
  <div id="yorum">
    <form action="/egitim/egitim_icerik/{{$egitim->id}}" method="POST" name="yorum">
      @csrf
      <div class="my-3 mb-4 py-3 px-3 w-100 w-md-50" id="yorum_form">
        <div class="mb-2">
          <label for="exampleFormControlInput1">Başlık:</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="baslik" placeholder="Yorum başlık giriniz">
        </div>
        <div class="mb-2">
          <label for="exampleFormControlInput2">İçerik:</label>
          <input type="text" class="form-control" id="exampleFormControlInput2" name="icerik" placeholder="Yorum içerik giriniz">
        </div>
        <div class="input-group d-flex flex-row-reverse justify-content-between gap-2 mt-3">
          <button class="btn w-25" type="submit">Gönder</button>
          <button class="btn w-25" type="clear">Temizle</button>
        </div>
      </div>
    </form>
  
    <div class="card-group d-flex flex-column gap-2 w-100">    
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
                <div class="card-body">
                  <p style="color: #333 !important;">{{$yorum->created_at}} tarihinde yazılmıştır.</p>
                </div>
              </div>
            @endif
          @endforeach
        </div><!-- /card-group -->
      @else      
        
      @endif  
    </div><!-- /card-group -->
  </div>
</div><!-- /yorum -->