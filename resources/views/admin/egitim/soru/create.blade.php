@extends('admin.layout', ['navbars' => $navbars, 'title' => "Soru", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_sorus', 'header' => "Soru oluştur"])
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
        <form method="POST" action="/admin/egitim/egitim_sorus" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="sinav_id">Sınav:</label>
              {{-- <input class="form-control" type="text" name="sinav_id" value="{{old('sinav_id')}}" /> --}}
              <select class="form-select form-control" name="sinav_id" aria-label="Default select example">
                <option selected disabled>Sınavlar</option>
                @foreach ($sinavs as $item)                      
                  <option value="{{$item->id}}">{{$item->baslik}}</option>
                @endforeach                   
              </select>
              @error('sinav_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>     
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="soru_no">Soru no:</label>
                <input class="form-control" type="text" name="soru_no" value="{{old('soru_no')}}" />
                @error('soru_no')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="baslik">Soru:</label>
              <input class="form-control" type="text" name="soru" value="{{old('soru')}}" />
              @error('soru')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="yer">Resim:</label>
              <input class="form-control" type="file" name="resim"/>
              @error('resim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">Resim açıklama:</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{old('resim_aciklama')}}" />
              @error('resim_aciklama')
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