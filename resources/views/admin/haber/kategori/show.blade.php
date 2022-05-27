@extends('admin.layout', ['navbars' => $navbars, 'title' => "Kategori", 'title2' => 'show', 'title_link' => '/admin/haber/haber_kategoris', 'header' => "Kategori verisi: {$kategori->ad}"])
@section('content')

  <table class="table table-bordered">    
    <tr>
      <td><strong>Ad:</strong></td>
      <td><p style="font-size: 0.9rem">{{$kategori->ad}}</p></td>
    </tr>   
    <tr>
      <td><strong>Açıklama:</strong></td>
      <td><p style="font-size: 0.9rem">{{$kategori->aciklama}}</p></td>
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
      <td><i class="font-size: 0.9rem{{$kategori->icon}}"></i></td>
    </tr> 
    <tr>
      <td><strong>Navbar:</strong></td>
      <td>
        @if (($kategori->navbar_gorunme) == 0)
          <p style="font-size: 0.9rem">Navbarda gizlidir.</p>
        @else
          <p style="font-size: 0.9rem">Navbarda görünmektedir.</p>
        @endif
      </td>
    </tr> 
    <tr>
      <td><strong>Footer:</strong></td>
      <td>
        @if (($kategori->footer_gorunme) == 0)
          <p style="font-size: 0.9rem">Footerda gizlidir.</p>
        @else
          <p style="font-size: 0.9rem">Footerda görünmektedir.</p>
        @endif
      </td>
    </tr>    
    <tr>
      <td colspan="2">
        <form method="POST" action="/admin/haber/haber_kategoris/{{$kategori->id}}" class="w-100">
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
        <a href="/admin/haber/haber_kategoris/{{$kategori->id}}/guncelle" class="btn btn-warning btn-xs w-100">
          Güncelle
        </a>
      </td>
    </tr>
  </table>  
@endsection