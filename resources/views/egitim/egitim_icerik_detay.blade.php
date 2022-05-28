<x-egitim_layout :navbars="$navbars">    
  <div class="" id="egitim_icerik_detay">
    <h3 class="baslik">{{$icerik->baslik}}</h3>
    <p class="icerik">{{$icerik->aciklama}}</p>
    <p class="ders_puani"><strong>Puan:</strong> {{$icerik->puan}}</p>
    <p class="user_puani"><strong>Güncel puanınız:</strong> {{auth()->user()->point}}</p> 
    <form action="/egitim/icerik_detay/{{$icerik->id}}" method="POST" class="my-3">
      @csrf
      <input type="hidden" name="egitim_puan" value="{{$icerik->puan}}">      
      <button type="submit" class="btn btn-ozel px-4 py-2">Dersi içeriğini tamamla</button>
    </form>
    
    <div class="video">
      <div style="width: 100%; height:300px;">
        {!! $icerik->video !!}
      </div>
      <p>{{$icerik->video_aciklamasi}}</p>
    </div>
    
    <div class="video_icerik">
      <p>{{$icerik->video_yazili}}</p>

      <div class="tarih">
        <p>Eğitim içeriği <strong>{{$icerik->created_at}}</strong> tarihinde sisteme eklenmiştir.</p>
        <p>Eğitim en son <strong>{{$icerik->updated_at}}</strong> tarihinde sistemde güncellenmiştir.</p>
      </div>
    </div>
      
  </div>
</x-egitim_layout>