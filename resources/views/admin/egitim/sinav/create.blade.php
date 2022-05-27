@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sınav", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_sinavs', 'header' => "Sınav oluştur"])
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
        <form method="POST" action="/admin/egitim/egitim_sinavs" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="icerik_id">icerik_id</label>
              <input class="form-control" type="text" name="icerik_id" value="{{old('icerik_id')}}" />
              @error('icerik_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="baslik">baslik</label>
                <input class="form-control" type="text" name="baslik" value="{{old('baslik')}}" />
                @error('baslik')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama</label>
              <input class="form-control" type="text" name="aciklama" value="{{old('aciklama')}}" />
              @error('aciklama')
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
            <button type="submit" class="btn btn-primary">
              Oluştur
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