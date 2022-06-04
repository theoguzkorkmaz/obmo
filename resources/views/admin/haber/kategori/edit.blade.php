@extends('admin.layout', ['navbars' => $navbars, 'title' => "Kategori", 'title2' => 'update', 'title_link' => '/admin/haber/haber_kategoris', 'header' => "Kategori güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/haber/haber_kategoris" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Kategori güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/haber/haber_kategoris/{{$kategori->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Ad:</label>
              <input class="form-control" type="text" name="ad" value="{{$kategori->ad}}" />
              @error('ad')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama:</label>
              <input class="form-control" type="text" name="aciklama" value="{{$kategori->aciklama}}" />
              <textarea id="summernote" name="aciklama">
                {{$kategori->aciklama}}
              </textarea>
              @error('aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
              <input class="form-control" type="file" name="resim"/>
              <br>
              <img src="{{$kategori->resim ? asset('storage/'.$kategori->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              @error('resim')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">Resim açıklama:</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{$kategori->resim_aciklama}}" />
              @error('resim_aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icon">Icon:</label>
              <input class="form-control" type="text" name="icon" value="{{$kategori->icon}}" />
              @error('icon')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
            
            <div class="mb-3">
              <label class="form-label" for="navbar_gorunme">Navbar görünme durumu:</label>
              {{-- <input class="form-control" type="text" name="navbar_gorunme" value="{{$kategori->navbar_gorunme}}" /> --}}
              <select class="form-select form-control" name="navbar_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($kategori->navbar_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($kategori->navbar_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
              </select>
              @error('navbar_gorunme')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="footer_gorunme">Footer görünme durumu:</label>
              {{-- <input class="form-control" type="text" name="footer_gorunme" value="{{$kategori->footer_gorunme}}" /> --}}
              <select class="form-select form-control" name="footer_gorunme" aria-label="Default select example">                                
                <option value="0" {{ ($kategori->footer_gorunme == 0) ? 'selected' : ''}}>Gözükmesin</option>
                <option value="1" {{ ($kategori->footer_gorunme == 1) ? 'selected' : ''}}>Gözüksün</option>                
              </select>
              @error('footer_gorunme')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz!</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="admin">Admin:</label>
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