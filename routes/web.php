<?php

use App\Models\EgitimSinav;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaberController;
use App\Http\Controllers\EgitimController;
use App\Http\Controllers\SosyalController;
use App\Http\Controllers\haber\HaberHaberController;
use App\Http\Controllers\haber\HaberSayfaController;
use App\Http\Controllers\haber\HaberYorumController;
use App\Http\Controllers\egitim\EgitimPuanController;
use App\Http\Controllers\egitim\EgitimSoruController;
use App\Http\Controllers\haber\HaberTopbarController;
use App\Http\Controllers\egitim\EgitimCevapController;
use App\Http\Controllers\egitim\EgitimSinavController;
use App\Http\Controllers\egitim\EgitimYorumController;
use App\Http\Controllers\egitim\EgitimEgitimController;
use App\Http\Controllers\egitim\EgitimIcerikController;
use App\Http\Controllers\haber\HaberKategoriController;
use App\Http\Controllers\egitim\EgitimKategoriController;
use App\Http\Controllers\egitim\EgitimNavbarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/haber', [HaberController::class, 'haber_index']);
Route::get('/haber/haber_detay/{haber}', [HaberController::class, 'haber_show']);
Route::get('/haber/kategori_detay/{kategori}', [HaberController::class, 'kategori_show']);
Route::get('/haber/sayfa_detay/{sayfa}', [HaberController::class, 'sayfa_show']);
Route::get('/haber/ara', [HaberController::class, 'ara_show']);
Route::get('/haber/kategoriler', [HaberController::class, 'kategoriler_show']);

Route::get('/egitim', [EgitimController::class, 'egitim_index']);
Route::get('/egitim/egitim_detay/{egitim}', [EgitimController::class, 'egitim_detay']);

Route::controller(HaberTopbarController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/haber_topbars', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/haber/haber_topbars', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/haber/haber_topbars/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/haber/haber_topbars', 'store');
    //--topbars admin show sayfası:
    Route::get('/admin/haber/haber_topbars/{haber_topbar}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/haber/haber_topbars/{haber_topbar}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/haber/haber_topbars/{haber_topbar}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/haber/haber_topbars/{haber_topbar}', 'destroy');
});

Route::controller(HaberKategoriController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/haber_kategoris', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/haber/haber_kategoris', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/haber/haber_kategoris/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/haber/haber_kategoris', 'store');
    //--topbars admin show sayfası:
    Route::get('/haber_kategoris/{haber_kategori}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/haber/haber_kategoris/{haber_kategori}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/haber/haber_kategoris/{haber_kategori}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/haber/haber_kategoris/{haber_kategori}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/haber/haber_kategoris/{haber_kategori}', 'destroy');
});

Route::controller(HaberHaberController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/habers', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/haber/habers', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/haber/habers/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/haber/habers', 'store');
    //--topbars admin show sayfası:
    Route::get('/habers/{haber_haber}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/haber/habers/{haber_haber}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/haber/habers/{haber_haber}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/haber/habers/{haber_haber}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/haber/habers/{haber_haber}', 'destroy');
});

Route::controller(HaberYorumController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/haber_yorums', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/haber/haber_yorums', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/haber/haber_yorums/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/haber/haber_yorums', 'store');
    //--topbars admin show sayfası:
    Route::get('/haber_yorums/{haber_yorum}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/haber/haber_yorums/{haber_yorum}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/haber/haber_yorums/{haber_yorum}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/haber/haber_yorums/{haber_yorum}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/haber/haber_yorums/{haber_yorum}', 'destroy');
});

Route::controller(SosyalController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/sosyals', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/sosyals', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/sosyals/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/sosyals', 'store');
    //--topbars admin show sayfası:
    Route::get('/sosyals/{sosyal}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/sosyals/{sosyal}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/sosyals/{sosyal}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/sosyals/{sosyal}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/sosyals/{sosyal}', 'destroy');
});

Route::controller(HaberSayfaController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/haber_sayfas', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/haber/haber_sayfas', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/haber/haber_sayfas/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/haber/haber_sayfas', 'store');
    //--topbars admin show sayfası:
    Route::get('/haber_sayfas/{haber_sayfa}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/haber/haber_sayfas/{haber_sayfa}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/haber/haber_sayfas/{haber_sayfa}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/haber/haber_sayfas/{haber_sayfa}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/haber/haber_sayfas/{haber_sayfa}', 'destroy');
});

Route::controller(EgitimKategoriController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_kategoris', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_kategoris', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_kategoris/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_kategoris', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_kategoris/{egitim_kategori}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_kategoris/{egitim_kategori}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_kategoris/{egitim_kategori}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_kategoris/{egitim_kategori}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_kategoris/{egitim_kategori}', 'destroy');
});

Route::controller(EgitimEgitimController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitims', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitims', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitims/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitims', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitims/{egitim_egitim}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitims/{egitim_egitim}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitims/{egitim_egitim}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitims/{egitim_egitim}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitims/{egitim_egitim}', 'destroy');
});

Route::controller(EgitimIcerikController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_iceriks', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_iceriks', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_iceriks/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_iceriks', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_iceriks/{egitim_icerik}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_iceriks/{egitim_icerik}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_iceriks/{egitim_icerik}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_iceriks/{egitim_icerik}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_iceriks/{egitim_icerik}', 'destroy');
});

Route::controller(EgitimSinavController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_sinavs', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_sinavs', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_sinavs/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_sinavs', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_sinavs/{egitim_sinav}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_sinavs/{egitim_sinav}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_sinavs/{egitim_sinav}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_sinavs/{egitim_sinav}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_sinavs/{egitim_sinav}', 'destroy');
});

Route::controller(EgitimYorumController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_yorums', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_yorums', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_yorums/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_yorums', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_yorums/{egitim_yorum}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_yorums/{egitim_yorum}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_yorums/{egitim_yorum}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_yorums/{egitim_yorum}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_yorums/{egitim_yorum}', 'destroy');
});

Route::controller(EgitimSoruController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_puans', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_puans', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_puans/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_puans', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_puans/{egitim_puan}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_puans/{egitim_puan}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_puans/{egitim_puan}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_puans/{egitim_puan}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_puans/{egitim_puan}', 'destroy');
});

Route::controller(EgitimPuanController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_puans', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_puans', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_puans/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_puans', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_puans/{egitim_puan}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_puans/{egitim_puan}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_puans/{egitim_puan}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_puans/{egitim_puan}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_puans/{egitim_puan}', 'destroy');
});

Route::controller(EgitimCevapController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_cevaps', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_cevaps', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_cevaps/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_cevaps', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_cevaps/{egitim_cevap}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_cevaps/{egitim_cevap}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_cevaps/{egitim_cevap}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_cevaps/{egitim_cevap}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_cevaps/{egitim_cevap}', 'destroy');
});

Route::controller(EgitimNavbarController::class)->group(function() {
    //Topbar kısmı - public
    //--topbars veri gönderimi:
    Route::get('/egitim_navbars', 'index');
    //Topbar kısmı - private
    //--admin sayfası için topbars veri gönderimi:
    Route::get('/admin/egitim/egitim_navbars', 'admin_index');
    //--topbars create sayfası:
    Route::get('/admin/egitim/egitim_navbars/olustur', 'create');
    //--topbars create işlemi:
    Route::post('/admin/egitim/egitim_navbars', 'store');
    //--topbars admin show sayfası:
    Route::get('/egitim_navbars/{egitim_navbar}', 'show');
    //--topbars admin show sayfası:
    Route::get('/admin/egitim/egitim_navbars/{egitim_navbar}', 'admin_show');
    //--topbars edit sayfası:
    Route::get('/admin/egitim/egitim_navbars/{egitim_navbar}/guncelle', 'edit');
    //--topbars edit işlemi:
    Route::put('/admin/egitim/egitim_navbars/{egitim_navbar}', 'update');
    //--topbars delete işlemi:
    Route::delete('/admin/egitim/egitim_navbars/{egitim_navbar}', 'destroy');
});

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
