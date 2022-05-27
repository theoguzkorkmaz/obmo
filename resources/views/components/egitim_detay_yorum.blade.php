@props(['yorums'])

<div class="w-full" id="yorum">
  <h3 class="baslik">yorumlar</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati modi illo, cupiditate fugiat deserunt debitis esse quae exercitationem assumenda, earum praesentium aliquid minima inventore. Ipsa qui saepe maiores ad ipsam.</p>
  <div class="card-group d-flex flex-column gap-2 w-full">    
    @foreach($yorums as $yorum)
      @if(count($yorums) != 0)
        <div class="card w-full" >
          <div class="card-title">
            <i class="fas fa-quote-left"></i>
            {{$yorum->icerik}}
            <i class="fas fa-quote-right"></i>
          </div>
          <div class="card-body">
            <p>{{$yorum->created_at}} tarihinde yazılmıştır.</p>
          </div>
        </div>
      @endif
    @endforeach
  </div><!-- /card-group -->
</div><!-- /yorum -->