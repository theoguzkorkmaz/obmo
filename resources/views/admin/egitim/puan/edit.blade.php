@extends('admin.layout', ['navbars' => $navbars, 'title' => "Puan", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_puans', 'header' => "Puan güncelle"])
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
        <form method="POST" action="/admin/egitim/egitim_puans/{{$puan->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="sinav_id">Sınav:</label>
              {{-- <input class="form-control" type="text" name="sinav_id" value="{{$puan->sinav_id}}" /> --}}
              <select class="form-select form-control" name="sinav_id" aria-label="Default select example">                
                @foreach ($sinavs as $item)                      
                  <option value="{{$item->id}}" {{ ($puan->sinav_id == $item->id) ? 'selected' : ''}}>{{$item->baslik}}</option>
                @endforeach 
              </select>
              @error('sinav_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="dogru_sayisi">Doğru sayısı:</label>
                <input class="form-control" type="text" name="dogru_sayisi" value="{{$puan->dogru_sayisi}}" />
                @error('dogru_sayisi')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="yanlis_sayisi">Yanlış sayısı:</label>
              <input class="form-control" type="text" name="yanlis_sayisi" value="{{$puan->yanlis_sayisi}}" />
              @error('yanlis_sayisi')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror 
          </div>
          
            <div class="mb-3">
              <label class="form-label" for="puan">Puan:</label>
              <input class="form-control" type="text" name="puan" value="{{$puan->puan}}" />
              @error('puan')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
           
            <div class="mb-3">
              <label class="form-label" for="admin">Admin:</label>
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