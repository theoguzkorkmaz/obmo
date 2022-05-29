@extends('admin.layout', ['navbars' => $navbars, 'title' => "Dashboard", 'title2' => 'index', 'title_link' => '/admin', 'header' => "Selamlar ".auth()->user()->name.""])
@section('content')
<div class="container-fluid">  
  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-none">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Kullanıcı sayısı</span>
          <span class="info-box-number">{{count($users)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Eğitim sayısı</span>
          <span class="info-box-number">{{count($egitims)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Haber sayısı</span>
          <span class="info-box-number">{{count($habers)}}</span>
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
          <span class="info-box-text">Sosyal mecra sayısı</span>
          <span class="info-box-number">{{count($sosyals)}}</span>
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
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Haber yorum sayısı</span>
          <span class="info-box-number">{{count($hyorums)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Eğitim yorum sayısı</span>
          <span class="info-box-number">{{count($eyorums)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Eğitim soru sayısı</span>
          <span class="info-box-number">{{count($esorus)}}</span>
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
          <span class="info-box-text">Eğitim cevap sayısı</span>
          <span class="info-box-number">{{count($ecevaps)}}</span>
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
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Haber kategori sayısı</span>
          <span class="info-box-number">{{count($hkategoris)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Eğitim kategori sayısı</span>
          <span class="info-box-number">{{count($ekategoris)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Haber topbar sayısı</span>
          <span class="info-box-number">{{count($htopbars)}}</span>
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
          <span class="info-box-text">Eğitim navbar sayısı</span>
          <span class="info-box-number">{{count($enavbars)}}</span>
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
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Eğitim puanlanma sayısı</span>
          <span class="info-box-number">{{count($epuans)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-sm">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Eğitim içerik sayısı</span>
          <span class="info-box-number">{{count($eiceriks)}}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Eğitim sınav sayısı</span>
          <span class="info-box-number">{{count($esinavs)}}</span>
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
          <span class="info-box-text">Haber sayfa sayısı</span>
          <span class="info-box-number">{{count($hsayfas)}}</span>
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
          <span class="info-box-text text-center">Haber | Sayfalar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/habers" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Haber | Haber</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/haber_kategoris" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Haber | Kategori</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/haber_topbars" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Haber | Topbar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/haber/haber_yorums" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Haber | Yorum</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_kategoris" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Kategori</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitims" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Eğitimler</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_iceriks" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | İçerik</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_sinavs" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Sınav</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_yorums" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Yorum</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_sorus" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Soru</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_cevaps" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Cevap</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_puans" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Puan</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/egitim/egitim_navbars" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Eğitim | Navbar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/sosyals" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Admin | Sosyal Medya</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/admin/admin_navbars" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Admin | Navbar</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
    <a href="/admin/adminlik" class="col-md-3 col-sm-6 col-12">
      <div class="info-box shadow-lg">        
        <div class="info-box-content">
          <span class="info-box-text text-center">Admin | Adminlik</span>          
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </a>
    <!-- /.col -->
  </div>
</div>
@endsection