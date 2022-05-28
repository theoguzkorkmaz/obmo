<?php

namespace App\Http\Controllers;

use App\Models\EgitimCevap;
use App\Models\EgitimEgitim;
use App\Models\EgitimIcerik;
use App\Models\EgitimKategori;
use App\Models\EgitimNavbar;
use App\Models\EgitimSinav;
use App\Models\EgitimSoru;
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
            ->with('iceriksay', EgitimIcerik::where('egitim_iceriks.egitim_id',$id)->get())
            ->with('kayit', UserEgitim::leftJoin('egitim_egitims', 'user_egitims.ders_id', '=', 'egitim_egitims.id')->where('user_egitims.user_id', '=', auth()->user()->id)->where('egitim_egitims.id', '=', $id)->first())
            ->with('egitmen', EgitimEgitim::leftJoin('users', 'egitim_egitims.admin', '=', 'users.id')->where('egitim_egitims.id', '=', $id)->first())
            ->with('yorums', EgitimEgitim::leftJoin('egitim_yorums', 'egitim_egitims.id', '=', 'egitim_yorums.egitim_id')->where('egitim_egitims.id', '=', $id)->orderBy('egitim_yorums.created_at', 'desc')->get())
            ->with('yorumsay', EgitimYorum::where('egitim_id',$id)->get());
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

    public function ara_show()
    {
        return view('egitim.ara')            
            ->with('navbars', EgitimNavbar::all())
            ->with('egitims', EgitimEgitim::latest()->filter(request(['ara']))->paginate(12))
            ->with('egitimsd', EgitimEgitim::inRandomOrder()->limit(10)->paginate(12));
    }

    public function egitim_icerik($id)
    {
        return view('egitim.egitim_icerik')            
            ->with('navbars', EgitimNavbar::all())
            ->with('egitim', EgitimEgitim::where('id', $id)->first())
            ->with('egitmen', EgitimEgitim::leftJoin('users', 'egitim_egitims.admin', '=', 'users.id')->where('egitim_egitims.id', '=', $id)->leftJoin('egitim_kategoris', 'egitim_egitims.kategori_id', '=', 'egitim_kategoris.id')->where('egitim_egitims.id', '=', $id)->first())
            ->with('iceriks', EgitimIcerik::where('egitim_iceriks.egitim_id','=', $id)->orderBy('egitim_iceriks.icerik_no', 'asc')->get())
            ->with('sinavs',  EgitimIcerik::rightJoin('egitim_sinavs', 'egitim_sinavs.icerik_id', '=', 'egitim_iceriks.id')->where('egitim_iceriks.egitim_id', '=', $id)->get())
            ->with('yorums', EgitimEgitim::leftJoin('egitim_yorums', 'egitim_egitims.id', '=', 'egitim_yorums.egitim_id')->where('egitim_egitims.id', '=', $id)->orderBy('egitim_yorums.created_at', 'desc')->get())
            ->with('yorumsay', EgitimYorum::where('egitim_id',$id)->get());
    }

    public function egitim_icerik_detay($id)
    {
        return view('egitim.egitim_icerik_detay')            
            ->with('navbars', EgitimNavbar::all())            
            ->with('icerik', EgitimIcerik::where('egitim_iceriks.id','=', $id)->orderBy('egitim_iceriks.icerik_no', 'asc')->first());
    }

    public function ders_kayit(Request $request, $id)
    {                          
        $user = Auth::user();        
        UserEgitim::create([            
            'user_id' => auth()->id(),
            'ders_id' => $id,
        ]);        
        
        // dd($id, $user->id, $user->name);
        return redirect()->back();
    }

    public function ders_yorum(Request $request, $id)
    {
        $baslik = $request->baslik;
        $icerik = $request->icerik;
        $user = auth()->user()->id;
        $ders = $id; 
        
        EgitimYorum::create([
            'egitim_id' => $ders,
            'kullanici_id' => $user,
            'baslik' => $baslik,
            'icerik' => $icerik,
            'admin' => '0'
        ]);

        return redirect()->back();
    }

    public function icerigi_tamamla(Request $request, $id)
    {
        $icerik_id = $id;
        $egitim_puan = $request->egitim_puan;
        $user_id = auth()->user()->point;
        print($icerik_id);
        print("<br>");
        print($user_id);
        print("<br>");
        print($egitim_puan);
        print("<br>");
        print('Çalışayıiiiiii');
    }

    public function sinav_detay($id)
    {
        return view('egitim.sinav_detay')            
            ->with('navbars', EgitimNavbar::all())            
            ->with('sinav', EgitimSinav::where('egitim_sinavs.id','=', $id)->orderBy('egitim_sinavs.created_at', 'asc')->first())
            ->with('sorus', EgitimSoru::where('egitim_sorus.sinav_id','=',$id)->orderBy('egitim_sorus.soru_no', 'asc')->get())
            ->with('cevaps', EgitimCevap::leftJoin('egitim_sorus', 'egitim_cevaps.soru_id', '=', 'egitim_sorus.id')->where('egitim_sorus.sinav_id', '=', $id)->orderBy('egitim_cevaps.cevap_no', 'asc')->get());
    }

    public function sinavi_tamamla(Request $request, $id)
    {        
        $names = $request->cevap_names;
        $myArray = explode(',', $names);
        // print_r($myArray);
        // print('<br>');
        
        $dogru = 0;
        $yanlis = 0;

        foreach ($myArray as $key) {
            $c = "cevap".$key;
            // print($c);
            // print("<br>");
            print($request->$c);            
            if(($request->$c) == 1) {
                // print("doğru");
                $dogru++;
            }
            else {
                // print("yanlış");
                $yanlis++;
            }            
        }    
        print("<br>");
        print("Doğru: ".$dogru);
        print("<br>");
        print("Yanlış: ".$yanlis);
    }
}
