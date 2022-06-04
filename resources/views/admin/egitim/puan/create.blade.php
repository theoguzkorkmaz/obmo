@extends('admin.layout', ['navbars' => $navbars, 'title' => "Puan", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_puans', 'header' => "Puan oluştur"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/egitim/egitim_puans" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Puan oluştur</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/egitim/egitim_puans" class="w-100" enctype="multipart/form-data">
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
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="dogru_sayisi">Doğru sayısı:</label>
                <input class="form-control" type="text" name="dogru_sayisi" value="{{old('dogru_sayisi')}}" />
                @error('dogru_sayisi')
                  <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>     
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="yanlis_sayisi">Yanlış sayısı:</label>
              <input class="form-control" type="text" name="yanlis_sayisi" value="{{old('yanlis_sayisi')}}" />
              @error('yanlis_sayisi')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror 
          </div>
          
            <div class="mb-3">
              <label class="form-label" for="puan">Puan:</label>
              <input class="form-control" type="text" name="puan" value="{{old('puan')}}" />
              @error('puan')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="admin">Admin:</label>
              <input class="form-control" type="text" name="admin" value="{{auth()->user()->id}}" readonly />
              <small>Bu veri <b>{{auth()->user()->name}}</b> tarafından oluşturulacak</small>
              @error('admin')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
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
                Oluştur
              </button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </div>

@endsection