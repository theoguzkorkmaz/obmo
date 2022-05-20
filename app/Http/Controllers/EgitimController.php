<?php

namespace App\Http\Controllers;

use App\Models\EgitimEgitim;
use App\Models\EgitimIcerik;
use App\Models\EgitimNavbar;
use Illuminate\Http\Request;

class EgitimController extends Controller
{
    public function egitim_index () {        
        return view('egitim.index')
            ->with('onerilers', EgitimEgitim::inRandomOrder()->limit(8)->get())
            ->with('navbars', EgitimNavbar::all())
            //Bu egiims'i kullanıcısız olarak ekledim, burada kullanıcının eğitimleri gösterilecektir.
            ->with('egitims', EgitimEgitim::latest()->paginate(6));
    }

    public function egitim_detay ($id) {         
        return view('egitim.egitim_detay')
            ->with('onerilers', EgitimEgitim::inRandomOrder()->limit(8)->get())
            ->with('navbars', EgitimNavbar::all())                        
            ->with('egitim', EgitimEgitim::where('egitim_egitims.id', '=', $id)->first())
            ->with('iceriks', EgitimEgitim::leftJoin('egitim_iceriks', 'egitim_egitims.id', '=', 'egitim_iceriks.egitim_id')->where('egitim_egitims.id', '=', $id)->orderBy('egitim_iceriks.icerik_no', 'asc')->get());            
    }
}
