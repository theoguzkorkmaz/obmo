@extends('admin.layout', ['navbars' => $navbars, 'title' => "Dashboard", 'title2' => 'index', 'title_link' => '/admin', 'header' => "Selamlar ".auth()->user()->name.""])
@section('content')
<div class="container-fluid">  
  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-none">
        <span class="info-box-icon bg-danger"><i class="far fa-user"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Kullanıcı sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($users)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-danger"><i class="fas fa-book"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($egitims)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-danger"><i class="fa fa-newspaper" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Haber sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($habers)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">
        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Sosyal mecra sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($sosyals)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-none">
        <span class="info-box-icon bg-danger"><i class="far fa-comment"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Haber yorum sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($hyorums)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-danger"><i class="far fa-comment"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim yorum sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($eyorums)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-danger"><i class="fa fa-question" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim soru sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($esorus)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">
        <span class="info-box-icon bg-danger"><i class="fa fa-check" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim cevap sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($ecevaps)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-none">
        <span class="info-box-icon bg-danger"><i class="fa fa-file" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Haber kategori sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($hkategoris)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-danger"><i class="fa fa-file" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim kategori sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($ekategoris)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-danger"><i class="fa fa-list" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Haber topbar sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($htopbars)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">
        <span class="info-box-icon bg-danger"><i class="fa fa-list" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim navbar sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($enavbars)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-none">
        <span class="info-box-icon bg-danger"><i class="fa fa-user-plus" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Puanlanma sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($epuans)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-danger"><i class="fa fa-paint-brush" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim içerik sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($eiceriks)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-danger"><i class="fa fa-question" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Eğitim sınav sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($esinavs)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">
        <span class="info-box-icon bg-danger"><i class="fa fa-paint-brush" aria-hidden="true"></i></span>

        <div class="info-box-content">
          <span class="info-box-text font-weight-bold">Haber sayfa sayısı</span>
          <span class="info-box-number" style="font-weight: 400; font-size: 0.8rem">{{count($hsayfas)}} adet</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
<!-- /.content -->

<div class="container-fluid mb-4">
  <div class="row">
    <h3 class="my-4 px-2">Hızlı linkler:</h3>
  </div>
  <div class="row">
    <a href="/admin/haber/haber_sayfas" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Haber | Sayfalar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/habers" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Haber | Haber</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/haber_kategoris" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Haber | Kategori</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/haber_topbars" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Haber | Topbar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/haber_yorums" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Haber | Yorum</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_kategoris" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Kategori</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitims" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Eğitimler</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_iceriks" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | İçerik</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_sinavs" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Sınav</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_yorums" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Yorum</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_sorus" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Soru</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_cevaps" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Cevap</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_puans" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Puan</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_navbars" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Eğitim | Navbar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/sosyals" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Admin | Sosyal Medya</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/admin/admin_navbars" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Admin | Navbar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/adminlik" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text font-weight-bold text-center">Admin | Adminlik</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
  </div>
</div>
@endsection