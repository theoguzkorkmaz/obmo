<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sosyal;
use App\Models\LogKayit;
use App\Models\EgitimSoru;
use App\Models\HaberHaber;
use App\Models\HaberSayfa;
use App\Models\HaberYorum;
use App\Models\AdminNavbar;
use App\Models\EgitimCevap;
use App\Models\EgitimSinav;
use App\Models\EgitimYorum;
use App\Models\HaberTopbar;
use App\Models\EgitimEgitim;
use App\Models\EgitimIcerik;
use App\Models\EgitimNavbar;
use Illuminate\Http\Request;
use App\Models\HaberKategori;
use App\Models\EgitimKategori;
use App\Models\EgitimPuan;

class AdminController extends Controller
{
    public function admin_index()
    {           
        return view('admin.index')
            ->with('navbars', AdminNavbar::all())
            ->with('users', User::all())
            ->with('egitims', EgitimEgitim::all())
            ->with('habers', HaberHaber::all())
            ->with('sosyals', Sosyal::all())
            ->with('eyorums', EgitimYorum::all())
            ->with('hyorums', HaberYorum::all())
            ->with('esorus', EgitimSoru::all())
            ->with('ecevaps', EgitimCevap::all())
            ->with('hkategoris', HaberKategori::all())
            ->with('ekategoris', EgitimKategori::all())
            ->with('enavbars', EgitimKategori::all())
            ->with('htopbars', EgitimKategori::all())
            ->with('epuans', EgitimPuan::all())
            ->with('eiceriks', EgitimIcerik::all())
            ->with('esinavs', EgitimSinav::all())
            ->with('hsayfas', HaberSayfa::all());
    } 

    public function ara_show()
    {
        return view('admin.ara')             
            ->with('navbars', 
                AdminNavbar::all())
            ->with('egitims', 
                EgitimEgitim::latest()->filter(request(['ara']))->paginate(12))
            ->with('ekategoris', 
                EgitimKategori::latest()->filter(request(['ara']))->paginate(12))
            ->with('eiceriks', 
                EgitimIcerik::latest()->filter(request(['ara']))->paginate(12))
            ->with('esinavs', 
                EgitimSinav::latest()->filter(request(['ara']))->paginate(12))
            ->with('eyorums', 
                EgitimYorum::latest()->filter(request(['ara']))->paginate(12))
            ->with('esorus', 
                EgitimSoru::latest()->filter(request(['ara']))->paginate(12))
            ->with('ecevaps', 
                EgitimCevap::latest()->filter(request(['ara']))->paginate(12))
            ->with('sosyals', 
                Sosyal::latest()->filter(request(['ara']))->paginate(12))
            ->with('habers', 
                HaberHaber::latest()->filter(request(['ara']))->paginate(12))
            ->with('hsayfas', 
                HaberSayfa::latest()->filter(request(['ara']))->paginate(12))
            ->with('hkategoris', 
                HaberKategori::latest()->filter(request(['ara']))->paginate(12))
            ->with('htopbars', 
                HaberTopbar::latest()->filter(request(['ara']))->paginate(12))
            ->with('hyorums', 
                HaberYorum::latest()->filter(request(['ara']))->paginate(12))
            ->with('navbarss', 
                AdminNavbar::latest()->filter(request(['ara']))->paginate(12));
    }

    public function adminlik()
    {           
        return view('admin.adminlik')
            ->with('navbars', AdminNavbar::all())
            ->with('users', User::all());
    } 

    public function admin_yap(Request $request)
    {
        $user_id = $request->user_id;
        print('sa');
        $formFields = $request->validate([
            'user_type' => 'Administrator',
        ]);

        User::where('id', $user_id)->update(['user_type' => 'Administrator']);

        LogKayit::create([
            'user_id' => auth()->user()->id,        
            'icerik' => $user_id." adminlik derecesine yükseltildi."
        ]); 

        return redirect()->back()->with('success', 'Adminlik başarı ile verildi!');
    }
}


