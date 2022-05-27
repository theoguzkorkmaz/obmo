@extends('admin.layout', ['navbars' => $navbars, 'title' => "Puan", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_puans', 'header' => "Puan oluştur"])
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
        <form method="POST" action="/admin/egitim/egitim_puans" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="sinav_id">sinav_id</label>
              <input class="form-control" type="text" name="sinav_id" value="{{old('sinav_id')}}" />
              @error('sinav_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="dogru_sayisi">dogru_sayisi</label>
                <input class="form-control" type="text" name="dogru_sayisi" value="{{old('dogru_sayisi')}}" />
                @error('dogru_sayisi')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="yanlis_sayisi">yanlis_sayisi</label>
              <input class="form-control" type="text" name="yanlis_sayisi" value="{{old('yanlis_sayisi')}}" />
              @error('yanlis_sayisi')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror 
          </div>
          
            <div class="mb-3">
              <label class="form-label" for="puan">puan</label>
              <input class="form-control" type="text" name="puan" value="{{old('puan')}}" />
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