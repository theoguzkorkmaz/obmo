@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sosyal", 'title2' => 'update', 'title_link' => '/admin/sosyals', 'header' => "Sosyal güncelle"])
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