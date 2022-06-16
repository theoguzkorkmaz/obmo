<div class="container p-0 w-full" id="anasayfa-derslerim">            
  <div class="row">
    <div class="col-12" id="derslerim">
      <div>
        <div class="baslik">
          <h3 class="baslik">Kayıtlı olduğum eğitimler:</h3>          
        </div><!-- /baslik -->
        <div class="row row-cols-1 row-cols-md-4 g-3" id="content">
          @if (count($megitims) != 0)
          @foreach ($megitims as $item)            
            <div class="col">
              <a class="card" href="/egitim/egitim_detay/{{$item->id}}">                
                <img src="{{$item->resim ? asset('storage/'.$item->resim) : asset('/images/no-image.png')}}" class="card-img-top" alt="{{Str::limit($item->baslik, 30)}}" title="{{Str::limit($item->baslik, 30)}}">
                <div class="card-body">
                  <h5 class="card-title">{{$item->baslik}}</h5>    
                  <p>Açıklama: <span>{!! substr(strip_tags($item->aciklama), 0, 42) !!} ...</span></p>                                      
                  <p class="mt-2"><i class="fas fa-tags    "></i> <span>{{$item->etiket}}</span></p>
                  <p class="mt-2"><i class="fas fa-clock"></i> <span>{{$item->created_at}}</span></p>
                </div>
              </a>
            </div>
          @endforeach   
          @else
            <p>Kayıtlı ders yok!</p>
          @endif
        </div><!-- /content -->
      </div>
    </div>
  </div><!-- /row -->  

  <div class="row my-4">
    {{$megitims->links()}}
  </div>
</div><!-- /anasayfa-derslerim -->