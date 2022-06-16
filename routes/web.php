<?php

use App\Http\Controllers\admin\AdminNavbarController;
use App\Http\Controllers\AdminController;
use App\Models\EgitimSinav;
use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\egitim\EgitimNavbarController;
use App\Http\Controllers\haber\HaberKategoriController;
use App\Http\Controllers\egitim\EgitimKategoriController;

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
    return view('home'); 
});

Route::get('/home', function () {
    return view('home'); 
});

Route::middleware('auth')->group(function () {
    Route::get('/profil/{user}', [HaberController::class, 'profil_detay']);
});

Route::get('/haber', [HaberController::class, 'haber_index']);
Route::get('/haber/haber_detay/{haber}', [HaberController::class, 'haber_show']);
Route::post('/haber/haber_detay/{haber}', [HaberController::class, 'haber_yorum']);
Route::get('/haber/kategori_detay/{kategori}', [HaberController::class, 'kategori_show']);
Route::get('/haber/sayfa_detay/{sayfa}', [HaberController::class, 'sayfa_show']); 
Route::get('/haber/ara', [HaberController::class, 'ara_show']);
Route::get('/haber/kategoriler', [HaberController::class, 'kategoriler_show']);
Route::post('/haber', [HaberController::class, 'bulten']); 

Route::middleware('auth')->group(function () {
    Route::get('/egitim', [EgitimController::class, 'egitim_index'])->middleware('auth');;
    Route::get('/egitim/ara', [EgitimController::class, 'ara_show']);
    Route::post('/egitim/egitim_icerik/{icerik}', [EgitimController::class, 'ders_yorum']);
    Route::get('/egitim/icerik_detay/{egitim_icerik}', [EgitimController::class, 'egitim_icerik_detay']);
    Route::post('/egitim/icerik_detay/{icerik}', [EgitimController::class, 'icerigi_tamamla']);
    Route::get('/egitim/egitim_detay/{egitim}', [EgitimController::class, 'egitim_detay']);
    Route::post('/egitim/egitim_detay/{egitim}', [EgitimController::class,'ders_kayit']);
    Route::get('/egitim/sinav_detay/{sinav}', [EgitimController::class, 'sinav_detay']);
    Route::post('/egitim/sinav_detay/{sinav}', [EgitimController::class, 'sinavi_tamamla']);
    Route::get('/egitim/kategoriler', [EgitimController::class, 'kategoriler_show']);
    Route::get('/egitim/kategori_detay/{kategori}', [EgitimController::class,'kategori_detay']);
    Route::get('/egitim/derslerim', [EgitimController::class, 'derslerim']);
    Route::get('/egitim/sonra', [EgitimController::class, 'daha_sonra']);
    Route::get('/egitim/siralama', [EgitimController::class, 'siralama']);
    Route::get('/egitim/egitim_icerik/{icerik}', [EgitimController::class, 'egitim_icerik']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/ara', [AdminController::class, 'ara_show']);
    Route::get('/admin/adminlik', [AdminController::class, 'adminlik']);
    Route::post('/admin/adminlik', [AdminController::class, 'admin_yap']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(HaberTopbarController::class)->group(function() {                    
        Route::get('/admin/haber/haber_topbars', 'admin_index');        
        Route::get('/admin/haber/haber_topbars/olustur', 'create');        
        Route::post('/admin/haber/haber_topbars', 'store');        
        Route::get('/admin/haber/haber_topbars/{haber_topbar}', 'admin_show');        
        Route::get('/admin/haber/haber_topbars/{haber_topbar}/guncelle', 'edit');        
        Route::put('/admin/haber/haber_topbars/{haber_topbar}', 'update');        
        Route::delete('/admin/haber/haber_topbars/{haber_topbar}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(HaberKategoriController::class)->group(function() {                
        Route::get('/admin/haber/haber_kategoris', 'admin_index');        
        Route::get('/admin/haber/haber_kategoris/olustur', 'create');        
        Route::post('/admin/haber/haber_kategoris', 'store');        
        Route::get('/admin/haber/haber_kategoris/{haber_kategori}', 'admin_show');        
        Route::get('/admin/haber/haber_kategoris/{haber_kategori}/guncelle', 'edit');        
        Route::put('/admin/haber/haber_kategoris/{haber_kategori}', 'update');        
        Route::delete('/admin/haber/haber_kategoris/{haber_kategori}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(HaberHaberController::class)->group(function() {                    
        Route::get('/admin/haber/habers', 'admin_index');        
        Route::get('/admin/haber/habers/olustur', 'create');        
        Route::post('/admin/haber/habers', 'store');        
        Route::get('/admin/haber/habers/{haber_haber}', 'admin_show');        
        Route::get('/admin/haber/habers/{haber_haber}/guncelle', 'edit');        
        Route::put('/admin/haber/habers/{haber_haber}', 'update');        
        Route::delete('/admin/haber/habers/{haber_haber}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(HaberYorumController::class)->group(function() {                    
        Route::get('/admin/haber/haber_yorums', 'admin_index');        
        Route::get('/admin/haber/haber_yorums/olustur', 'create');        
        Route::post('/admin/haber/haber_yorums', 'store');        
        Route::get('/admin/haber/haber_yorums/{haber_yorum}', 'admin_show');        
        Route::get('/admin/haber/haber_yorums/{haber_yorum}/guncelle', 'edit');        
        Route::put('/admin/haber/haber_yorums/{haber_yorum}', 'update');        
        Route::delete('/admin/haber/haber_yorums/{haber_yorum}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(SosyalController::class)->group(function() {                
        Route::get('/admin/sosyals', 'admin_index');        
        Route::get('/admin/sosyals/olustur', 'create');        
        Route::post('/admin/sosyals', 'store');        
        Route::get('/admin/sosyals/{sosyal}', 'admin_show');        
        Route::get('/admin/sosyals/{sosyal}/guncelle', 'edit');        
        Route::put('/admin/sosyals/{sosyal}', 'update');        
        Route::delete('/admin/sosyals/{sosyal}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(HaberSayfaController::class)->group(function() {                 
        Route::get('/admin/haber/haber_sayfas', 'admin_index');        
        Route::get('/admin/haber/haber_sayfas/olustur', 'create');        
        Route::post('/admin/haber/haber_sayfas', 'store');        
        Route::get('/admin/haber/haber_sayfas/{haber_sayfa}', 'admin_show');        
        Route::get('/admin/haber/haber_sayfas/{haber_sayfa}/guncelle', 'edit');        
        Route::put('/admin/haber/haber_sayfas/{haber_sayfa}', 'update');        
        Route::delete('/admin/haber/haber_sayfas/{haber_sayfa}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimKategoriController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_kategoris', 'admin_index');        
        Route::get('/admin/egitim/egitim_kategoris/olustur', 'create');        
        Route::post('/admin/egitim/egitim_kategoris', 'store');        
        Route::get('/admin/egitim/egitim_kategoris/{egitim_kategori}', 'admin_show');        
        Route::get('/admin/egitim/egitim_kategoris/{egitim_kategori}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_kategoris/{egitim_kategori}', 'update');        
        Route::delete('/admin/egitim/egitim_kategoris/{egitim_kategori}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimEgitimController::class)->group(function() {                
        Route::get('/admin/egitim/egitims', 'admin_index');        
        Route::get('/admin/egitim/egitims/olustur', 'create');        
        Route::post('/admin/egitim/egitims', 'store');        
        Route::get('/admin/egitim/egitims/{egitim_egitim}', 'admin_show');        
        Route::get('/admin/egitim/egitims/{egitim_egitim}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitims/{egitim_egitim}', 'update');        
        Route::delete('/admin/egitim/egitims/{egitim_egitim}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimIcerikController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_iceriks', 'admin_index');        
        Route::get('/admin/egitim/egitim_iceriks/olustur', 'create');        
        Route::post('/admin/egitim/egitim_iceriks', 'store');        
        Route::get('/admin/egitim/egitim_iceriks/{egitim_icerik}', 'admin_show');        
        Route::get('/admin/egitim/egitim_iceriks/{egitim_icerik}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_iceriks/{egitim_icerik}', 'update');        
        Route::delete('/admin/egitim/egitim_iceriks/{egitim_icerik}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimSinavController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_sinavs', 'admin_index');        
        Route::get('/admin/egitim/egitim_sinavs/olustur', 'create');        
        Route::post('/admin/egitim/egitim_sinavs', 'store');        
        Route::get('/admin/egitim/egitim_sinavs/{egitim_sinav}', 'admin_show');        
        Route::get('/admin/egitim/egitim_sinavs/{egitim_sinav}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_sinavs/{egitim_sinav}', 'update');        
        Route::delete('/admin/egitim/egitim_sinavs/{egitim_sinav}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimYorumController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_yorums', 'admin_index');        
        Route::get('/admin/egitim/egitim_yorums/olustur', 'create');        
        Route::post('/admin/egitim/egitim_yorums', 'store');        
        Route::get('/admin/egitim/egitim_yorums/{egitim_yorum}', 'admin_show');        
        Route::get('/admin/egitim/egitim_yorums/{egitim_yorum}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_yorums/{egitim_yorum}', 'update');        
        Route::delete('/admin/egitim/egitim_yorums/{egitim_yorum}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimSoruController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_sorus', 'admin_index');        
        Route::get('/admin/egitim/egitim_sorus/olustur', 'create');        
        Route::post('/admin/egitim/egitim_sorus', 'store');        
        Route::get('/admin/egitim/egitim_sorus/{egitim_soru}', 'admin_show');        
        Route::get('/admin/egitim/egitim_sorus/{egitim_soru}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_sorus/{egitim_soru}', 'update');        
        Route::delete('/admin/egitim/egitim_sorus/{egitim_soru}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimPuanController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_puans', 'admin_index');        
        Route::get('/admin/egitim/egitim_puans/olustur', 'create');        
        Route::post('/admin/egitim/egitim_puans', 'store');        
        Route::get('/admin/egitim/egitim_puans/{egitim_puan}', 'admin_show');        
        Route::get('/admin/egitim/egitim_puans/{egitim_puan}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_puans/{egitim_puan}', 'update');        
        Route::delete('/admin/egitim/egitim_puans/{egitim_puan}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimCevapController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_cevaps', 'admin_index');        
        Route::get('/admin/egitim/egitim_cevaps/olustur', 'create');        
        Route::post('/admin/egitim/egitim_cevaps', 'store');        
        Route::get('/admin/egitim/egitim_cevaps/{egitim_cevap}', 'admin_show');        
        Route::get('/admin/egitim/egitim_cevaps/{egitim_cevap}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_cevaps/{egitim_cevap}', 'update');        
        Route::delete('/admin/egitim/egitim_cevaps/{egitim_cevap}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(EgitimNavbarController::class)->group(function() {                
        Route::get('/admin/egitim/egitim_navbars', 'admin_index');        
        Route::get('/admin/egitim/egitim_navbars/olustur', 'create');        
        Route::post('/admin/egitim/egitim_navbars', 'store');        
        Route::get('/admin/egitim/egitim_navbars/{egitim_navbar}', 'admin_show');        
        Route::get('/admin/egitim/egitim_navbars/{egitim_navbar}/guncelle', 'edit');        
        Route::put('/admin/egitim/egitim_navbars/{egitim_navbar}', 'update');        
        Route::delete('/admin/egitim/egitim_navbars/{egitim_navbar}', 'destroy');
    });
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(AdminNavbarController::class)->group(function() {        
        Route::get('/admin/admin/admin_navbars', 'admin_index');        
        Route::get('/admin/admin/admin_navbars/olustur', 'create');        
        Route::post('/admin/admin/admin_navbars', 'store');        
        Route::get('/admin/admin/admin_navbars/{admin_navbar}', 'admin_show');        
        Route::get('/admin/admin/admin_navbars/{admin_navbar}/guncelle', 'edit');        
        Route::put('/admin/admin/admin_navbars/{admin_navbar}', 'update');        
        Route::delete('/admin/admin/admin_navbars/{admin_navbar}', 'destroy');
    });
});

Auth::routes();
Route::middleware(['auth', 'isAdmin'])->group(function () {
    // Route::get('/admin', function() {
    //     return view('admin.index');
    // })->name('dashboard');
    Route::get('/admin', [AdminController::class, 'admin_index']);
});
