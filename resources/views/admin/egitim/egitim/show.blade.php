@extends('admin.layout', ['navbars' => $navbars, 'title' => "Eğitim", 'title2' => 'show', 'title_link' => '/admin/egitim/egitims', 'header' => "Eğitim verisi: {$egitim->baslik}"])
@section('content')

  <table class="table table-bordered">
    <tr>
      <td><strong>Kategori id:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->kategori_id}}</p></td>
    </tr>
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->baslik}}</p></td>
    </tr>
    <tr>
      <td><strong>İçerik:</strong>:</td>
      <td><p style="font-size: 0.9rem">{{$egitim->icerik}}</p></td>
    </tr>
    <tr>
      <td><strong>Resim:</strong></td>
      <td><img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    </td>
    </tr>
    <tr>
      <td><strong>Resim açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->resim_aciklama}}</p></td>
    </tr>
    <tr>
      <td><strong>Etiket:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->etiket}}</p></td>
    </tr>
    <tr>
      <td><strong>Kitle:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->kitle}}</p></td>
    </tr>
    <tr>
      <td><strong>Kazanım:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->kazanim}}</p></td>
    </tr>
    <tr>
      <td><strong>Doküman:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->dokuman}}</p></td>
    </tr>
    <tr>
      <td><strong>S.S.S:</strong></td>
      <td><p style="font-size: 0.9rem">{{$egitim->sss}}</p></td>
    </tr>
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/egitim/egitims/{{$egitim->id}}" class="w-100">
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
        <a href="/admin/egitim/egitims/{{$egitim->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection