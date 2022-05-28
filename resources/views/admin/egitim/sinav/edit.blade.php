@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sınav", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_sinavs', 'header' => "Sınav güncelle"])
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
        <form method="POST" action="/admin/egitim/egitim_sinavs/{{$sinav->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="icerik_id">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik_id" value="{{$sinav->icerik_id}}" /> --}}
              <select class="form-select form-control" name="icerik_id" aria-label="Default select example">                
                @foreach ($iceriks as $item)                      
                  <option value="{{$item->id}}" {{ ($sinav->icerik_id == $item->id) ? 'selected' : ''}}>{{$item->baslik}}</option>
                @endforeach 
              </select>
              @error('icerik_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="baslik">Başlık:</label>
                <input class="form-control" type="text" name="baslik" value="{{$sinav->baslik}}" />
                @error('baslik')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama:</label>
              <input class="form-control" type="text" name="aciklama" value="{{$sinav->aciklama}}" />
              @error('aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="puan">Puan:</label>
              <input class="form-control" type="text" name="puan" value="{{$sinav->puan}}" />
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