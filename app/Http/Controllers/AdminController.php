<?php

namespace App\Http\Controllers;

use App\Models\AdminNavbar;
use App\Models\EgitimCevap;
use App\Models\EgitimEgitim;
use App\Models\EgitimIcerik;
use App\Models\EgitimKategori;
use App\Models\EgitimNavbar;
use App\Models\EgitimSinav;
use App\Models\EgitimSoru;
use App\Models\EgitimYorum;
use App\Models\HaberHaber;
use App\Models\HaberKategori;
use App\Models\HaberSayfa;
use App\Models\HaberTopbar;
use App\Models\HaberYorum;
use App\Models\Sosyal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_index()
    {           
        return view('admin.index')
            ->with('navbars', AdminNavbar::all());
    } 

    public function ara_show()
    {
        return view('admin.ara')             
            ->with('navbars', AdminNavbar::all())
            ->with('egitims', EgitimEgitim::latest()->filter(request(['ara']))->paginate(12))
            ->with('ekategoris', EgitimKategori::latest()->filter(request(['ara']))->paginate(12))
            ->with('eiceriks', EgitimIcerik::latest()->filter(request(['ara']))->paginate(12))
            ->with('esinavs', EgitimSinav::latest()->filter(request(['ara']))->paginate(12))
            ->with('eyorums', EgitimYorum::latest()->filter(request(['ara']))->paginate(12))
            ->with('esorus', EgitimSoru::latest()->filter(request(['ara']))->paginate(12))
            ->with('ecevaps', EgitimCevap::latest()->filter(request(['ara']))->paginate(12))
            ->with('sosyals', Sosyal::latest()->filter(request(['ara']))->paginate(12))
            ->with('habers', HaberHaber::latest()->filter(request(['ara']))->paginate(12))
            ->with('hsayfas', HaberSayfa::latest()->filter(request(['ara']))->paginate(12))
            ->with('hkategoris', HaberKategori::latest()->filter(request(['ara']))->paginate(12))
            ->with('htopbars', HaberTopbar::latest()->filter(request(['ara']))->paginate(12))
            ->with('hyorums', HaberYorum::latest()->filter(request(['ara']))->paginate(12))
            ->with('navbarss', AdminNavbar::latest()->filter(request(['ara']))->paginate(12));
    }
}
