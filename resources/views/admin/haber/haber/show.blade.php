@extends('admin.layout', ['navbars' => $navbars, 'title' => "Haber", 'title2' => 'show', 'title_link' => '/admin/haber/habers', 'header' => "Haber verisi: {$haber->baslik}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Kategori:</strong></td>
      <td><p style="font-size: 0.9rem">{{$haber->kategori_id}}</p></td>
    </tr>  
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p style="font-size: 0.9rem">{{$haber->baslik}}</p></td>
    </tr>  
    <tr>
      <td><strong>İçerik:</strong></td>
      <td><p style="font-size: 0.9rem">{{$haber->icerik}}</p></td>
    </tr>  
    <tr>
      <td><strong>Resim:</strong></td>
      <td><img src="{{$haber->resim ? asset('storage/'.$haber->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    </td>
    </tr>  
    <tr>
      <td><strong>Resim açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$haber->resim_aciklama}}</p></td>
    </tr>  
    <tr>
      <td><strong>Etiket:</strong></td>
      <td><p style="font-size: 0.9rem">{{$haber->etiket}}</p></td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/haber/habers/{{$haber->id}}" class="w-100">
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
        <a href="/admin/haber/habers/{{$haber->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection