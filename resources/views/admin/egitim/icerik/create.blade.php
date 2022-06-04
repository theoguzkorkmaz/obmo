@extends('admin.layout', ['navbars' => $navbars, 'title' => "İçerik", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_iceriks', 'header' => "İçerik oluştur"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/egitim/egitim_iceriks" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">İçerik oluştur</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/egitim/egitim_iceriks" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="egitim_id">Eğitim:</label>
              {{-- <input class="form-control" type="text" name="egitim_id" value="{{old('egitim_id')}}" /> --}}
              <select class="form-select form-control" name="egitim_id" aria-label="Default select example">
                <option selected disabled>Eğitimler</option>
                @foreach ($egitims as $item)                      
                  <option value="{{$item->id}}">{{$item->baslik}}</option>
                @endforeach                   
              </select>
              @error('egitim_id')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik_no">İçerik no:</label>
              <input class="form-control" type="text" name="icerik_no" value="{{old('icerik_no')}}" />
              @error('icerik_no')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="baslik">Başlık:</label>
                <input class="form-control" type="text" name="baslik" value="{{old('baslik')}}" />
                @error('baslik')
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
              <label class="form-label" for="video">Video:</label>
              <input class="form-control" type="text" name="video" value="{{old('video')}}" />              
              @error('video')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="video_aciklamasi">Video açıklaması:</label>
              <input class="form-control" type="text" name="video_aciklamasi" value="{{old('video_aciklamasi')}}" />
              @error('video_aciklamasi')
                <p class="mt-1 text-danger font-weight-bold">Lütfen kontrol ediniz</p>    
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="video_yazili">Video yazılı:</label>
              {{-- <input class="form-control" type="text" name="aciklama" value="{{old('aciklama')}}" /> --}}
              <textarea id="summernote2" name="video_yazili">
                {{old('video_yazili')}} 
              </textarea>
              @error('video_yazili')
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