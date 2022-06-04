@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sayfa", 'title2' => 'update', 'title_link' => '/admin/haber/haber_sayfas', 'header' => "Sayfa güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/haber/haber_sayfas" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Sayfa güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/haber/haber_sayfas/{{$sayfa->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Başlık:</label>
              <input class="form-control" type="text" name="ad" value="{{$sayfa->ad}}" />
              @error('ad')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{$sayfa->icerik}}" /> --}}
              <textarea id="summernote" name="icerik">
                {!! $sayfa->icerik !!}
              </textarea>
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
              <img src="{{$sayfa->resim ? asset('storage/'.$sayfa->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              <br>
              <input class="form-control" type="file" name="resim"/>
              @error('resim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="navbar_gorunme">Navbarda gözükme durumu:</label>
              {{-- <input class="form-control" type="text" name="navbar_gorunme" value="{{$sayfa->navbar_gorunme}}" /> --}}
              <select class="form-select form-control" name="navbar_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($sayfa->navbar_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($sayfa->navbar_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
              </select>
              @error('navbar_gorunme')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="footer_gorunme">Footerda gözükme durumu:</label>
              {{-- <input class="form-control" type="text" name="footer_gorunme" value="{{$sayfa->footer_gorunme}}" /> --}}
              <select class="form-select form-control" name="footer_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($sayfa->footer_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($sayfa->footer_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
              </select>
              @error('footer_gorunme')
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