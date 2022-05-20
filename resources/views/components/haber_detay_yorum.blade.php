@props(['yorums'])

<div id="detay-yorum">
  <h4 class="baslik">
    Tartışma
  </h4>

  <div id="yorum_not_login">
    <p>Yorum yapmak için lütfen giriş yapınız!</p>
    <div class="d-flex flex-row gap-3">
      <a href="#">Giriş yap</a>
      <a href="$">Abone ol</a>
    </div>            
  </div><!-- /yorum_not_login -->
  
  <div id="yorum_login">    
    <a href="$" class="d-inline-block my-2">Genel yorum kuralları</a>
    <div class="input-group">
      <label for="" class="form-label">Ne düşünüyorsun:</label>
      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">              
    </div>
    <div class="list-group">            
      <p>Bu habere yapılan tüm yorumlar:</p>
      @foreach($yorums as $yorum)
        @if(($yorum->onay) == 1)
          <div href="#" class="list-group-item flex-column align-items-start">                
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1"><i class="fas fa-quote-left"></i> {{$yorum->icerik}} <i class="fas fa-quote-right"></i></h5>
              <small>{{$yorum->created_at->diffForHumans()}}</small>
            </div>                                
            <small>
              <span>Oğuz Korkmaz</span>
            </small>
          </div>
        @endif
      @endforeach      
    </div>
  </div><!-- /yorum_login -->
</div><!-- /detay-yorum -->