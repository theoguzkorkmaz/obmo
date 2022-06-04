@extends('admin.layout', ['navbars' => $navbars, 'title' => "Sayfa", 'title2' => 'create', 'title_link' => '/admin/haber/haber_topbars', 'header' => "Sayfa oluştur"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/haber/haber_topbars" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div> 
    <div class="col-md-6 offset-md-3 col-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Topbar oluştur</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/haber/haber_topbars" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Ad:</label>
              <input class="form-control" type="text" name="ad" value="{{old('ad')}}" />
              @error('ad')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="link">Link:</label>
              <input class="form-control" type="text" name="link" value="{{old('link')}}" />
              @error('link')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama:</label>
              {{-- <input class="form-control" type="text" name="aciklama" value="{{old('aciklama')}}" /> --}}
              <textarea id="summernote" name="aciklama">
                {{old('aciklama')}} 
              </textarea>
              @error('aciklama')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="yer">Yer:</label>
              {{-- <input class="form-control" type="text" name="yer" value="{{old('yer')}}" /> --}}
              <select class="form-select form-control" name="yer" aria-label="Default select example">                                
                <option selected disabled>Taraf seçin:</option>
                <option value="0">Sol taraf</option>
                <option value="1">Sağ taraf</option>                
              </select>
              @error('yer')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icon">Icon:</label>
              <input class="form-control" type="text" name="icon" value="{{old('icon')}}" />
              @error('icon')
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