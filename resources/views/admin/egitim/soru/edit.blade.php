@extends('admin.layout', ['navbars' => $navbars, 'title' => "Soru", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_sorus', 'header' => "Soru güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/eggitim/egitim_sorus" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Soru güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/egitim/egitim_sorus/{{$soru->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="sinav_id">sinav_id</label>
              {{-- <input class="form-control" type="text" name="sinav_id" value="{{$soru->sinav_id}}" /> --}}
              <select class="form-select form-control" name="sinav_id" aria-label="Default select example">                
                @foreach ($sinavs as $item)                      
                  <option value="{{$item->id}}" {{ ($soru->sinav_id == $item->id) ? 'selected' : ''}}>{{$item->baslik}}</option>
                @endforeach 
              </select>
              @error('sinav_id')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="soru_no">soru_no</label>
                <input class="form-control" type="text" name="soru_no" value="{{$soru->soru_no}}" />
                @error('soru_no')
                  <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="baslik">soru</label>
              <input class="form-control" type="text" name="soru" value="{{$soru->soru}}" />
              @error('soru')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">resim</label>
              <input class="form-control" type="file" name="resim"/>
              <br>
              <img src="{{$soru->resim ? asset('storage/'.$soru->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              @error('resim')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">resim_aciklama</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{$soru->resim_aciklama}}" />
              @error('resim_aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="admin">admin</label>
              <input class="form-control" type="text" name="admin" value="{{auth()->user()->id}}" readonly />
              <small>Bu veri <b>{{auth()->user()->name}}</b> tarafından oluşturulacak</small>
              @error('admin')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
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