@extends('admin.layout', ['navbars' => $navbars, 'title' => "Kategori", 'title2' => 'show', 'title_link' => '/admin/egitim/egitim_kategoris', 'header' => "Kategori verisi: {$kategori->baslik}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Başlık:</strong></td>
      <td><p style="font-size: 0.9rem">{{$kategori->baslik}}</p></td>
    </tr>
    <tr>
      <td><strong>Açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{!! $kategori->aciklama !!}</p></td>
    </tr> 
    <tr>
      <td><strong>Resim:</strong></td>
      <td><img src="{{$kategori->resim ? asset('storage/'.$kategori->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    </td>
    </tr> 
    <tr>
      <td><strong>Resim açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$kategori->resim_aciklama}}</p></td>
    </tr> 
    <tr>
      <td><strong>Icon:</strong></td>
      <td><i class="{{$kategori->icon}}"></i></td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/kategori/kategori_kategoris/{{$kategori->id}}" class="w-100">
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
        <a href="/admin/egitim/egitim_kategoris/{{$kategori->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection