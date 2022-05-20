@props(['habers'])

<div class="container p-md-0 haberler">
  <h2 class="baslik">
    Haberler
  </h2>

  <div class="card-group d-flex flex-column flex-md-row flex-wrap gap-2">
    @if (count($habers) != 0)
      @foreach ($habers as $haber)
        <a class="card" href="/haber/haber_detay/{{$haber->id}}" title="{{Str::limit($haber->baslik, 70)}}">        
          <img src="{{$haber->resim ? asset('storage/'.$haber->resim) : asset('/images/no-image.png')}}" class="card-img-top shadow-sm" alt="{{Str::limit($haber->icerik, 30)}}">
          <div class="card-body">
            <h5 class="card-title">{{Str::limit($haber->baslik, 70)}}</h5>
            <p class="card-text">{{Str::limit($haber->icerik, 120)}}</p>
            <p class="card-text mb-0">
              <small class="text-muted">{{$haber->created_at->diffForHumans()}}</small>
            </p>
          </div>
        </a>
      @endforeach 
    @else
      <p>Haberler yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
    @endif       
  </div>
  

  <div class="container p-md-0 mt-3 d-flex flex-row align-items-center justify-content-center">
    {{$habers->links()}}
  </div>
</div><!-- /haberler -->