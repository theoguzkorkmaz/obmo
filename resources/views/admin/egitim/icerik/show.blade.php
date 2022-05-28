@extends('admin.layout', ['navbars' => $navbars, 'title' => "İçerik", 'title2' => 'show', 'title_link' => '/admin/egitim/egitim_iceriks', 'header' => "İçerik verisi: {$icerik->baslik}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Eğitim id:</strong></td>
      <td><p style="font-size: 0.9rem">{{$icerik->egitim_id}}</p></td>
    </tr>
    <tr>
      <td><strong>İçerik no:</strong></td>
      <td><p style="font-size: 0.9rem">{{$icerik->icerik_no}}</p></td>
    </tr>
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p style="font-size: 0.9rem">{{$icerik->baslik}}</p></td>
    </tr>
    <tr>
      <td><strong>Video:</strong></td>
      <td style="font-size: 0.85rem">
        {!! $icerik->video !!}
      </td>
    </tr>
    <tr>
      <td><strong>Video açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$icerik->video_aciklamasi}}</p></td>
    </tr>
    <tr>
      <td><strong>Video yazılı:</strong></td>
      <td><p style="font-size: 0.9rem">{{$icerik->video_yazili}}</p></td>
    </tr>
    <tr>
      <td><strong>Açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{!! $icerik->aciklama !!}</p></td>
    </tr>
    <tr>
      <td><strong>Puan:</strong></td>
      <td><p style="font-size: 0.9rem">{{$icerik->puan}}</p></td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/egitim/egitim_iceriks/{{$icerik->id}}" class="w-100">
          @csrf
          @method('DELETE')
          <button class="btn btn-xs bg-danger w-100">
              Sil
          </button>
        </form> 
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <a href="/admin/egitim/egitim_iceriks/{{$icerik->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection