@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sosyal", 'title2' => 'update', 'title_link' => '/admin/sosyals', 'header' => "Sosyal güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/sosyals" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Sosyal güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/sosyals/{{$sosyal->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">ad</label>
              <input class="form-control" type="text" name="ad" value="{{$sosyal->ad}}" />
              @error('ad')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
          </div>
        
          <div class="mb-3">
            <label class="form-label" for="icon">icon</label>
            <input class="form-control" type="text" name="icon" value="{{$sosyal->icon}}" />
            @error('icon')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
          </div>
        
          <div class="mb-3">
            <label class="form-label" for="link">link</label>
            <input class="form-control" type="text" name="link" value="{{$sosyal->link}}" />
            @error('link')
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
          </div>
        
          <div class="mb-3">
            <label class="form-label" for="aciklama">aciklama</label>
            <input class="form-control" type="text" name="aciklama" value="{{$sosyal->aciklama}}" />
            @error('aciklama') 
              <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
            @enderror
          </div>
        
          <div class="mb-3">
            <label class="form-label" for="aktiflik">aktiflik</label>
            {{-- <input class="form-control" type="text" name="aktiflik" value="{{$sosyal->aktiflik}}" /> --}}
            <select class="form-select form-control" name="aktiflik" aria-label="Default select example">                                
              <option value="0" {{ ($sosyal->aktiflik == 0) ? 'selected' : ''}}>Aktif değil</option>
              <option value="1" {{ ($sosyal->aktiflik == 1) ? 'selected' : ''}}>Aktif</option>                
            </select>
            @error('aktiflik')
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
  
          <div class="card-footer">             
            <div class="w-100 d-flex flex-row justify-content-between">
              <button type="reset" class="btn btn-danger w-25">              
                Temizle
                <i class="fa fa-trash ml-3" aria-hidden="true"></i>
              </button> 
              <button type="submit" class="btn btn-primary w-25">
                <i class="fa fa-plus-square mr-3" aria-hidden="true"></i>
                Güncelle
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection