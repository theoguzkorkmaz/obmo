<x-egitim_layout :navbars="$navbars">
  <div class="" id="egitim_icerik_detay">    
    <h3 class="baslik">{{$sinav->baslik}}</h3>
    <p class="icerik">{{$sinav->aciklama}}</p>
  </div>  

  <form action="/egitim/sinav_detay/{{$sinav->id}}" method="post">
    @csrf

    <input type="hidden" name="sinav_puan" value="{{$sinav->puan}}">
    @php
        $ids = [];
    @endphp
    @foreach ($sorus as $soru)    
      <div class="my-3">
        <h3>Soru {{$soru->soru_no}}: {{$soru->soru}}</h3>                
        @foreach ($cevaps as $cevap)                    
        @php                
                $a = $cevap->soru_id;                              
            @endphp
          @if (($soru->id == $cevap->soru_id))                       
            <input type="radio" value="{{$cevap->dogru}}" name="cevap{{$cevap->soru_id}}" required>
            Şık {{$cevap->cevap_no}}: {{$cevap->icerik}}</p>                                  
            @php
              array_push($ids, $a);
            @endphp 
          @endif                                                  
        @endforeach                 
      </div>
    @endforeach
    @php        
        $b="";
        foreach(array_unique($ids) as $id) {
          $b = $b.$id.",";          
        }        
    @endphp 
    <input type="hidden" name="cevap_names" value="@php print(substr($b, 0, -1)); @endphp">      

    

    @if (count($tamamdurumu) != 0)
      {{-- <p>İçerik id: {{$sinav->id}}</p> --}}
      @php
        $a = false;   
      @endphp 
      @foreach ($tamamdurumu as $item)
          @if ($item->sinav_id == $sinav->id)
            @php
              $a = true;   
            @endphp          
            <div class="w-100 d-flex flex-row align-items-center gap-4 my-3">
              <p class="btn btn-ozel px-4 py-2">
                Bu içeriği <strong>{{$item->created_at}}</strong> tarihinde tamamladınız!  
              </p>      
            </div>
          @endif
      @endforeach      
      @if($a == false)
        <div class="w-100 d-flex flex-row align-items-center gap-4">
          <button type="submit" class="btn btn-ozel px-4 py-2">Sınavı bitir</button>      
        </div>
      @endif
    @else
      <div class="w-100 d-flex flex-row align-items-center gap-4">
        <button type="submit" class="btn btn-ozel px-4 py-2">Sınavı bitir</button>      
      </div>
    @endif    
  </form>

</x-egitim_layout>