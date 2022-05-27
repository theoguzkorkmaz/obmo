@extends('admin.layout', ['navbars' => $navbars, 'title' => "Medya", 'title2' => 'index', 'title_link' => '/admin/sosyals', 'header' => "Medya verileri"])
@section('content')

<div class="row d-flex justify-content-end px-2">
  <a href="/admin/sosyals/olustur" class="btn btn-danger btn-md mb-4 w-25">
    Yeni medya ekle
  </a>
</div>

<div class="row">
  @if(count($sosyals) == 0)
    <p>No data</p>  
    @else
      @foreach($sosyals as $item)  
      <div class="col-md-4">
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">{{Str::limit($item->ad, 25)}}</h3>

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
                <td><strong class="fs-5">Ad:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($item->ad, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">Icon:</strong></td>
                <td style="font-size: 0.85rem">
                  <i class="{{$item->icon}}"></i>
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">İçerik:</strong></td>
                <td style="font-size: 0.85rem">
                  {{Str::limit($item->aciklama, 100)}}
                </td>
              </tr>
              <tr>
                <td><strong class="fs-5">İçerik:</strong></td>
                <td style="font-size: 0.85rem">
                  @if (($item->aktiflik) == 0)
                    <p>Aktif değil</p>
                  @else
                    <p>Aktif</p>
                  @endif
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/sosyals/{{$item->id}}" class="btn btn-primary btn-xs w-100">
                    Detaylı gör
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <a href="/admin/sosyals/{{$item->id}}/guncelle" class="btn btn-warning btn-xs w-100">
                    Güncelle
                  </a>
                </td>
              </tr>
              <tr>                
                <td style="font-size: 0.85rem" colspan="2">
                  <form method="POST" action="/admin/sosyals/{{$item->id}}">
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
  {{$sosyals->links()}}
</div>
@endsection