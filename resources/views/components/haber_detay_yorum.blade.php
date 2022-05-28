@props(['yorums'])
@props(['habert'])

<div id="detay-yorum">
  <h4 class="baslik">
    Tartışma
  </h4>

  @guest      
    <div id="yorum_not_login">
      <p>Yorum yapmak için lütfen giriş yapınız!</p>
      <div class="d-flex flex-row gap-3">
        <a href="#">Giriş yap</a>
        <a href="$">Abone ol</a>
      </div>            
    </div><!-- /yorum_not_login -->
  @endguest
  
  @auth  
    <div id="yorum_login">    
      <a href="/haber/yorum_kurallari" class="d-inline-block my-2">Genel yorum kuralları</a>

      <form action="/haber/haber_detay/{{$habert->id}}" method="POST" id="yorum_form">
        @csrf
        <div class="input-group" id="yorum">
          <label for="" class="form-label">Başlık:</label>
          <input type="text" class="form-control" name="baslik" placeholder="Yorum başlık girin">              
        </div>

        <div class="input-group">
          <label for="" class="form-label">İçerik:</label>
          <input type="text" class="form-control" name="icerik" placeholder="Yorum içerik girin">              
        </div>

        <div class="input-group d-flex flex-row-reverse justify-content-between gap-2 mb-3">
          <button class="btn w-25" type="submit">Gönder</button>
          <button class="btn w-25" type="clear">Temizle</button>
        </div>
      </form>

      <div class="list-group">            
        <strong class="my-2 mt-4">Bu habere yapılan tüm yorumlar:</strong>
        @foreach($yorums as $yorum)
          @if(($yorum->onay) == 1)
            <div href="#" class="list-group-item flex-column align-items-start">                
              <div class="d-flex w-100 justify-content-between">
                <div>
                  <h4 class="mb-1 fw-bold fs-5 mb-2"> {{$yorum->baslik}} </h4>
                  <h5 class="mb-1 fs-6"><i class="fas fa-quote-left"></i> {{$yorum->icerik}} <i class="fas fa-quote-right"></i></h5>
                </div>
                <small>{{$yorum->created_at->diffForHumans()}}</small>
              </div>
            </div>
          @endif
        @endforeach      
      </div>
    </div><!-- /yorum_login -->
  @endauth
</div><!-- /detay-yorum -->