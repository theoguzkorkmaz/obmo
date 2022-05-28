@extends('admin.layout', ['navbars' => $navbars, 'title' => "Cevap", 'title2' => 'create', 'title_link' => '/admin/egitim/egitim_cevaps', 'header' => "Cevap oluştur"])
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
        <form method="POST" action="/admin/egitim/egitim_cevaps" class="w-100" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="mb-3">
              <label class="form-label" for="soru_id">Soru:</label>
              {{-- <input class="form-control" type="text" name="soru_id" value="{{old('soru_id')}}" /> --}}
              <select class="form-select form-control" name="soru_id" aria-label="Default select example">
                <option selected disabled>Sorular</option>
                @foreach ($sorus as $item)                      
                  <option value="{{$item->id}}">{{$item->soru}}</option>
                @endforeach                  
              </select>
              @error('soru_id')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
            </div>
          
            <div class="mb-3">
                <label class="form-label" for="cevap_no">Cevap no:</label>
                <input class="form-control" type="text" name="cevap_no" value="{{old('cevap_no')}}" />
                @error('cevap_no')
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
              <label class="form-label" for="dogru">Doğru:</label>
              {{-- <input class="form-control" type="text" name="dogru" value="{{old('dogru')}}" /> --}}
              <select class="form-select form-control" name="dogru" aria-label="Default select example">                                
                <option value="0" selected>Yanlış cevaptır</option>
                <option value="1">Doğru cevaptır</option>                
              </select>
              @error('dogru')
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