@extends('admin.layout', ['navbars' => $navbars, 'title' => "Eğitim", 'title2' => 'update', 'title_link' => '/admin/egitim/egitims', 'header' => "Eğitim güncelle"])
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
        <form method="POST" action="/admin/egitim/egitims/{{$egitim->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">kategori_id</label>
              <input class="form-control" type="text" name="kategori_id" value="{{$egitim->kategori_id}}" />
              @error('kategori_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3"> 
              <label class="form-label" for="baslik">baslik</label>
              <input class="form-control" type="text" name="baslik" value="{{$egitim->baslik}}" />
              @error('baslik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">içerik</label>
              <input class="form-control" type="text" name="icerik" value="{{$egitim->icerik}}" />
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim</label>
              <input class="form-control" type="file" name="resim"/>
              <br>
              <img src="{{$egitim->resim ? asset('storage/'.$egitim->resim) : asset('/images/no-image.png')}}" alt="" style="width: 320px;height: 320px;"/>    
              @error('resim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim_aciklama">resim_aciklama</label>
              <input class="form-control" type="text" name="resim_aciklama" value="{{$egitim->resim_aciklama}}" />
              @error('resim_aciklama')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="etiket">etiket</label>
              <input class="form-control" type="text" name="etiket" value="{{$egitim->etiket}}" />
              @error('etiket')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kitle">kitle</label>
              <input class="form-control" type="text" name="kitle" value="{{$egitim->kitle}}" />
              @error('kitle')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kazanim">kazanim</label>
              <input class="form-control" type="text" name="kazanim" value="{{$egitim->kazanim}}" />
              @error('kazanim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
            
            <div class="mb-3">
              <label class="form-label" for="dokuman">dokuman</label>
              <input class="form-control" type="text" name="dokuman" value="{{$egitim->dokuman}}" />
              @error('dokuman')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="sss">sss</label>
              <input class="form-control" type="text" name="sss" value="{{$egitim->sss}}" />
              @error('sss')
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