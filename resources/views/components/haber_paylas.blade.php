<div class="d-flex flex-row gap-2" id="paylasim">
  <p>Paylaşın:</p>
  <ul class="list-group list-group-horizontal">    
    <li class="list-group-item">
      <a href="#" class="button" data-sharer="facebook" data-hashtag="{{$haber->etiket}}" data-url="https://www.obmo.com/haber/haber_detay/{{$haber->id}}">
        <i class="fab fa-facebook"></i>        
      </a>
    </li>
    <li class="list-group-item">
      <a href="#" class="button" data-sharer="twitter" data-title="{{$haber->baslik}}" data-hashtags="{{$haber->etiket}}" data-url="https://www.obmo.com/haber/haber_detay/{{$haber->id}}">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <li class="list-group-item">
      <a href="#" class="button" data-sharer="linkedin" data-url="https://www.obmo.com/haber/haber_detay/{{$haber->id}}">
        <i class="fab fa-linkedin"></i>
      </a>
    </li>
    <li class="list-group-item">
      <a href="#" class="button" data-sharer="whatsapp" data-title="{{$haber->baslik}}" data-url="https://www.obmo.com/haber/haber_detay/{{$haber->id}}">
        <i class="fab fa-whatsapp"></i>
      </a>
    </li>
    <li class="list-group-item">
      <a href="#" class="button" data-sharer="telegram" data-title="{{$haber->baslik}}" data-url="https://www.obmo.com/haber/haber_detay/{{$haber->id}}">
        <i class="fab fa-telegram"></i>
      </a>
    </li>
    <li class="list-group-item">
      <a href="#" class="button" data-sharer="skype" data-url="https://www.obmo.com/haber/haber_detay/{{$haber->id}}" data-title="Checkout Sharer.js!">
        <i class="fab fa-skype"></i>
      </a>
    </li>
    <li class="list-group-item">
      <a href="#" class="button" data-sharer="reddit" data-url="https://www.obmo.com/haber/haber_detay/{{$haber->id}}">
        <i class="fab fa-reddit"></i>
      </a>
    </li>
  </ul>
</div>