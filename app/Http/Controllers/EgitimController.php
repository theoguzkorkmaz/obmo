<?php

namespace App\Http\Controllers;

use App\Models\EgitimEgitim;
use App\Models\EgitimIcerik;
use App\Models\EgitimKategori;
use App\Models\EgitimNavbar;
use App\Models\EgitimYorum;
use App\Models\UserEgitim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EgitimController extends Controller
{
    public function egitim_index () {   
        
        

        return view('egitim.index')            
            ->with('navbars', EgitimNavbar::all())            
            ->with('egitims', EgitimEgitim::latest()->paginate(4))
            ->with('kategoris', EgitimKategori::all())
            ->with('megitims', UserEgitim::join('egitim_egitims', 'egitim_egitims.id', '=', 'user_egitims.ders_id')->where('user_egitims.user_id', '=', auth()->user()->id)->paginate(4));
    }

    public function egitim_detay ($id) {             
        return view('egitim.egitim_detay')            
            ->with('navbars', EgitimNavbar::all())                        
            ->with('egitim', EgitimEgitim::where('egitim_egitims.id', '=', $id)->first())
            ->with('iceriks', EgitimEgitim::leftJoin('egitim_iceriks', 'egitim_egitims.id', '=', 'egitim_iceriks.egitim_id')->where('egitim_egitims.id', '=', $id)->orderBy('egitim_iceriks.icerik_no', 'asc')->get())
            ->with('kayit', UserEgitim::leftJoin('egitim_egitims', 'user_egitims.ders_id', '=', 'egitim_egitims.id')->where('user_egitims.user_id', '=', auth()->user()->id)->where('egitim_egitims.id', '=', $id)->first())
            ->with('egitmen', EgitimEgitim::leftJoin('users', 'egitim_egitims.admin', '=', 'users.id')->where('egitim_egitims.id', '=', $id)->first())
            ->with('yorums', EgitimEgitim::leftJoin('egitim_yorums', 'egitim_egitims.id', '=', 'egitim_yorums.egitim_id')->where('egitim_egitims.id', '=', $id)->orderBy('egitim_yorums.created_at', 'desc')->get());
    }
    
    public function kategoriler_show()
    {
        return view('egitim.kategoriler')            
            ->with('navbars', EgitimNavbar::all())
            ->with('kategoris', EgitimKategori::all());
    }

    public function kategori_detay($id)
    {
        return view('egitim.kategori_detay')            
            ->with('navbars', EgitimNavbar::all())
            ->with('kategori', EgitimKategori::where('id', $id)->first())
            ->with('egitims', EgitimEgitim::where('kategori_id', $id)->get());
    }

    public function derslerim()
    {
        return view('egitim.derslerim')            
            ->with('navbars', EgitimNavbar::all())
            ->with('derss', UserEgitim::join('egitim_egitims', 'egitim_egitims.id', '=', 'user_egitims.ders_id')->where('user_egitims.user_id', '=', auth()->user()->id)->paginate(12))
            ->with('yorums', EgitimYorum::where('kullanici_id', auth()->user()->id)->get());
    }

    public function egitim_icerik($id)
    {
        return view('egitim.egitim_icerik')            
            ->with('navbars', EgitimNavbar::all())
            ->with('egitim', EgitimEgitim::where('id', $id)->first())
            ->with('egitmen', EgitimEgitim::leftJoin('users', 'egitim_egitims.admin', '=', 'users.id')->where('egitim_egitims.id', '=', $id)->leftJoin('egitim_kategoris', 'egitim_egitims.kategori_id', '=', 'egitim_kategoris.id')->where('egitim_egitims.id', '=', $id)->first());            
    }

    public function ders_kayit(Request $request, $id)
    {                          
        $user = Auth::user();        
        UserEgitim::create([            
            'user_id' => auth()->id(),
            'ders_id' => $id,
        ]);        
        
        dd($id, $user->id, $user->name);
    }

}
