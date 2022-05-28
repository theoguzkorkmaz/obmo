@extends('admin.layout', ['navbars' => $navbars, 'title' => "Eğitim", 'title2' => 'create', 'title_link' => '/admin/egitim/egitims', 'header' => "Eğitim oluştur"])
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
        <form method="POST" action="/admin/egitim/egitims" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="ad">Kategori:</label>
              {{-- <input class="form-control" type="text" name="kategori_id" value="{{old('kategori_id')}}" /> --}}
              <select class="form-select form-control" name="kategori_id" aria-label="Default select example">
                <option selected disabled>Kategoriler</option>
                @foreach ($kategoris as $item)                      
                  <option value="{{$item->id}}">{{$item->baslik}}</option>
                @endforeach                   
              </select>
              @error('kategori_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>     
              @enderror
            </div>
          
            <div class="mb-3"> 
              <label class="form-label" for="baslik">Başlık:</label>
              <input class="form-control" type="text" name="baslik" value="{{old('baslik')}}" />
              @error('baslik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="aciklama">Açıklama:</label>
              <textarea id="summernote6" name="aciklama">
                {{old('aciklama')}} 
              </textarea>
              @error('sss')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">İçerik:</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{old('icerik')}}" /> --}}
              <textarea id="summernote" name="icerik">
                {{old('icerik')}} 
              </textarea>
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="resim">Resim:</label>
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
              <label class="form-label" for="etiket">Etiket:</label>
              <input class="form-control" type="text" name="etiket" value="{{old('etiket')}}" />
              @error('etiket')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kitle">Kitle:</label>
              <textarea id="summernote3" name="kitle">
                {{old('icerik')}} 
              </textarea>
              @error('kitle')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="kazanim">Kazanım:</label>
              <textarea id="summernote4" name="kazanim">
                {{old('icerik')}} 
              </textarea>
              @error('kazanim')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
            
            <div class="mb-3">
              <label class="form-label" for="dokuman">Döküman:</label>
              <textarea id="summernote5" name="dokuman">
                {{old('icerik')}} 
              </textarea>
              @error('dokuman')
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