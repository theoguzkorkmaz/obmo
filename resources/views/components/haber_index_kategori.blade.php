@props(['kategoris'])

<div class="container p-md-0 haberler">
  <h2 class="baslik">
    Kategoriler
  </h2>

  <div class="card-group d-flex flex-column flex-md-row flex-wrap gap-2">
    @if (count($kategoris) != 0)
      @foreach ($kategoris as $kategori)
        <a class="card" href="/haber/kategori_detay/{{$kategori->id}}" title="{{Str::limit($kategori->baslik, 70)}}">        
          <img src="{{$kategori->resim ? asset('storage/'.$kategori->resim) : asset('/images/no-image.png')}}" class="card-img-top shadow-sm" alt="{{Str::limit($kategori->resim_aciklama, 30)}}">
          <div class="card-body">
            <h5 class="card-title">{{Str::limit($kategori->ad, 70)}}</h5>
            <p class="card-text">{{Str::limit($kategori->aciklama, 120)}}</p>
            <p class="card-text mb-0">
              <small class="text-muted">{{$kategori->created_at->diffForHumans()}}</small>
            </p>
          </div>
        </a>
      @endforeach 
    @else
      <p>Kategoriler yüklenemedi, lütfen daha sonra tekrar deneyin!</p>
    @endif       
  </div>
  

  <div class="container p-md-0 mt-3 d-flex flex-row align-items-center justify-content-center">
    {{$kategoris->links()}}
  </div>
</div><!-- /kategoriler -->