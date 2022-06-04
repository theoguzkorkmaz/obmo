@extends('admin.layout', ['navbars' => $navbars, 'title' => "Cevap", 'title2' => 'update', 'title_link' => '/admin/egitim/egitim_cevaps', 'header' => "Cevap güncelle"])
@section('content')
  <div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mb-3 col-12 d-flex flex-row justify-content-between">
      <a class="btn btn-secondary" href="/admin" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Dashboard'a dön</a>
      <a class="btn btn-primary" href="/admin/admin/admin_navbars" role="button"><i class="fas fa-long-arrow-alt-left mr-3"></i> Geri dön</a>
    </div>
    <div class="col-md-6 offset-md-3 col-12">
      <div class="card card-primary">
        <div class="card-header">
            <h1 style="font-size: 1.1rem;margin-bottom:0;">Cevap güncelle</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/admin/egitim/egitim_cevaps/{{$cevap->id}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="soru_id">soru_id</label>
              {{-- <input class="form-control" type="text" name="soru_id" value="{{$cevap->soru_id}}" /> --}}
              <select class="form-select form-control" name="soru_id" aria-label="Default select example">                
                @foreach ($sorus as $item)                      
                  <option value="{{$item->id}}" {{ ($cevap->soru_id == $item->id) ? 'selected' : ''}}>{{$item->soru}}</option>
                @endforeach 
              </select>
              @error('soru_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div> 
          
            <div class="mb-3">
                <label class="form-label" for="baslik">cevap_no</label>
                <input class="form-control" type="text" name="cevap_no" value="{{$cevap->cevap_no}}" />
                @error('cevap_no')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                @enderror 
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="icerik">icerik</label>
              {{-- <input class="form-control" type="text" name="icerik" value="{{$cevap->icerik}}" /> --}}
              <textarea id="summernote" name="icerik">
                {!! $cevap->icerik !!}
              </textarea>
              @error('icerik')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
              <label class="form-label" for="dogru">dogru</label>
              {{-- <input class="form-control" type="text" name="dogru" value="{{$cevap->dogru}}" /> --}}
              <select class="form-select form-control" name="dogru" aria-label="Default select example">                                
                <option value="0" {{ ($cevap->dogru == 0) ? 'selected' : ''}}>Yanlış cevaptır</option>
                <option value="1" {{ ($cevap->dogru == 1) ? 'selected' : ''}}>Doğru cevaptır</option>                
              </select>
              @error('dogru')
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