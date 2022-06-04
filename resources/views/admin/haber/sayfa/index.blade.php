@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sayfa", 'title2' => 'index', 'title_link' => '/admin/haber/haber_sayfas', 'header' => "Sayfalar"])
@section('content')

<div class="row">
  @if(count($sayfas) == 0)
    <div class="card bg-transparent shadow-none w-50 text-center p-4">
      <div class="d-flex flex-row justify-content-between">
        <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
        <a class="btn btn-danger" href="/admin/haber/haber_sayfas/olustur" role="button">Veri ekle <i class="far fa-plus-square ml-3"></i></a>
      </div>
      <div class="bg-dark mt-2 p-3 rounded">
        <h4 class="text-danger"><i class="fas fa-times"></i></h4>
        <p class="mb-0">Henüz veri girişi yapılmamıştır.</p>
      </div>
    </div> 
    @else
    <div class="col-md-12 col-12 d-flex justify-content-end px-2">
      <a href="/admin/haber/haber_sayfas/olustur" class="btn btn-danger btn-md mb-4 w-25">
        Yeni sayfa ekle
      </a>
    </div>
      @foreach($sayfas as $sayfa)  
      <div class="col-md-4">
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">{!! substr(strip_tags($sayfa->ad), 0, 30) !!}</h3> 

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body p-2">
            <table class="table table-bordered">
              <tr>
                <td><strong class="fs-5">Başlık:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($sayfa->ad, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">İçerik:</strong></td>
                <td style="font-size: 0.85rem">
                  {!! $sayfa->icerik !!}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">Resim:</strong></td>
                <td style="font-size: 0.85rem">
                  <img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" alt="" style="height: 100px; width: 100px; object-fit: cover; "/>    
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/haber/haber_sayfas/{{$sayfa->id}}" class="btn btn-primary btn-xs w-100">
                    Detaylı gör
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/haber/haber_sayfas/{{$sayfa->id}}/guncelle" class="btn btn-warning btn-xs w-100">
                    Güncelle
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <form method="POST" action="/admin/haber/haber_sayfas/{{$sayfa->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-xs w-100">
                        Sil
                    </button>
                  </form>
                </td>
              </tr>
            </table>
            
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      @endforeach
    @endif      
</div>  

<div class="row px-2 text-white">
  {{$sayfas->links()}}
</div>
@endsection