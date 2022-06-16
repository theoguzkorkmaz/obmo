<x-egitim_layout :navbars="$navbars">    
  <div class="" id="egitim_icerik_detay">    
    <h3 class="baslik">{{$icerik->baslik}}</h3>
    <p class="icerik my-3">{!! $icerik->aciklama !!}</p>
    <table class="table table-bordered w-25">
      <tr>
        <td class="w-50"><strong>İçerik puanı:</strong></td>
        <td class="w-50">{{$icerik->puan}}</td>
      </tr>
      <tr>
        <td class="w-50"><strong>Sizin puanınız:</strong></td>
        <td class="w-50">{{auth()->user()->point}}</td>
      </tr>
    </table> 

    @if (count($tamamdurumu) != 0)
      {{-- <p>İçerik id: {{$icerik->id}}</p> --}}
      @php
        $a = false;   
      @endphp 
      @foreach ($tamamdurumu as $item)
          @if ($item->icerik_id == $icerik->id)
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
        <form action="/egitim/icerik_detay/{{$icerik->id}}" method="POST" class="my-3">
          @csrf
          <input type="hidden" name="egitim_puan" value="{{$icerik->puan}}">      
          <button type="submit" class="btn btn-ozel px-4 py-2">Dersi içeriğini tamamla</button>
        </form>
      @endif
    @else
      <form action="/egitim/icerik_detay/{{$icerik->id}}" method="POST" class="my-3">
        @csrf
        <input type="hidden" name="egitim_puan" value="{{$icerik->puan}}">      
        <button type="submit" class="btn btn-ozel px-4 py-2">Dersi içeriğini tamamla</button>
      </form>
    @endif    
    
    <div class="video">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{!! $icerik->video !!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p class="fs-6"><strong>Video açıklaması:</strong> {{$icerik->video_aciklamasi}}</p>
    </div>
    
    <div class="video_icerik mt-4">
      <div class="baslik">
        Eğitim içeriği:
      </div>
      <p>{!! $icerik->video_yazili !!}</p>

      <div class="tarih mt-4">        
        <table class="table table-bordered w-50">
          <tr>
            <td class="w-50"><strong>Oluşturulma:</strong></td>
            <td class="w-50">{{$icerik->created_at}}</td>
          </tr>
          <tr>
            <td class="w-50"><strong>Son güncellenme:</strong></td>
            <td class="w-50">{{$icerik->updated_at}}</td>
          </tr>
        </table>
      </div>
    </div>
      
  </div>
</x-egitim_layout>