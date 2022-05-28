@extends('admin.layout', ['navbars' => $navbars, 'title' => "Dashboard", 'title2' => 'index', 'title_link' => '/admin', 'header' => "Selamlar ".auth()->user()->name.""])
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>

          <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
          </p>

          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card card-primary card-outline">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>

          <p class="card-text">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
          </p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div><!-- /.card -->
    </div>
    <!-- /.col-md-6 -->
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h5 class="m-0">Featured</h5>
        </div>
        <div class="card-body">
          <h6 class="card-title">Special title treatment</h6>

          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="m-0">Featured</h5>
        </div>
        <div class="card-body">
          <h6 class="card-title">Special title treatment</h6>

          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
    <h1>Linkler:</h1>

    <ul style="list-style: none;padding:0;display:flex;flex-direction:column;gap:1rem;font-size:1.1rem;">  
      <li>
        <a href="/admin/haber/haber_sayfas">Haber - Sayfalar</a>
      </li>
      <li>
        <a href="/admin/haber/habers">Haber - Haberler</a>
      </li>
      <li>
        <a href="/admin/haber/haber_kategoris">Haber - Kategori</a>
      </li>
      <li>
        <a href="/admin/haber/haber_topbars">Haber - Topbar</a>
      </li>
      <li>
        <a href="/admin/haber/haber_yorums">Haber - Yorum</a>
      </li>
      <li>
        <hr>
      </li>
      <li>
        <a href="/admin/egitim/egitim_kategoris">Eğitim - Kategori</a>
      </li>
      <li>
        <a href="/admin/egitim/egitims">Eğitim - Eğitimler</a>
      </li>
      <li>
        <a href="/admin/egitim/egitim_iceriks">Eğitim - İçerik</a>
      </li>
      <li>
        <a href="/admin/egitim/egitim_sinavs">Eğitim - Sınav</a>
      </li>
      <li>
        <a href="/admin/egitim/egitim_yorums">Eğitim - Yorum</a>
      </li>
      <li>
        <a href="/admin/egitim/egitim_sorus">Eğitim - Soru</a>
      </li>
      <li>
        <a href="/admin/egitim/egitim_cevaps">Eğitim - Cevap</a>
      </li>
      <li>
        <a href="/admin/egitim/egitim_puans">Eğitim - Puan</a>
      </li>
      <li>
        <a href="/admin/egitim/egitim_navbars">Eğitim - Navbar</a>
      </li>
      <li>
        <hr>
      </li>
      <li>
        <a href="/admin/sosyals">Sosyal medya mecraları</a>
      </li>
      <li>
        <a href="/admin/admin/admin_navbars">Admin - Navbar</a>
      </li>
    </ul>  
@endsection