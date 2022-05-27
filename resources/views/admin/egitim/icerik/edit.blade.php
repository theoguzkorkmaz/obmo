@extends('admin.layout', ['navbars' => $navbars, 'title' => "İçerik", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_iceriks', 'header' => "İçerik güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-7 col-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/egitim/egitim_iceriks/{{$icerik->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="egitim_id">egitim_id</label>
              <input class="form-control" type="text" name="egitim_id" value="{{$icerik->egitim_id}}" />
              @error('egitim_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik_no">icerik_no</label>
              <input class="form-control" type="text" name="icerik_no" value="{{$icerik->icerik_no}}" />
              @error('icerik_no')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="baslik">baslik</label>
                <input class="form-control" type="text" name="baslik" value="{{$icerik->baslik}}" />
                @error('baslik')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama</label>
              <input class="form-control" type="text" name="aciklama" value="{{$icerik->aciklama}}" />
              @error('aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="puan">puan</label>
              <input class="form-control" type="text" name="puan" value="{{$icerik->puan}}" />
              @error('puan')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="admin">admin</label>
              <input class="form-control" type="text" name="admin" value="{{auth()->user()->id}}" readonly />
              <small>Bu veri <b>{{auth()->user()->name}}</b> tarafından oluşturulacak</small>
              @error('admin')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>

          </div>
          <!-- /.card-body -->
  
          <div class="card-footer w-100">
            <button type="submit" class="btn btn-warning">
              Güncelle
            </button> 
            <button type="reset" class="btn btn-danger">
              Formu temizle
            </button> 
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection