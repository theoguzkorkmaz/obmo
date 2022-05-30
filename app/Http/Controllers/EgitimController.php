<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LogKayit;
use App\Models\UserSinav;
use App\Models\UserSonra;
use App\Models\EgitimPuan;
use App\Models\EgitimSoru;
use App\Models\UserEgitim;
use App\Models\UserIcerik;
use App\Models\EgitimCevap;
use App\Models\EgitimSinav;
use App\Models\EgitimYorum;
use App\Models\EgitimEgitim;
use App\Models\EgitimIcerik;
use App\Models\EgitimNavbar;
use Illuminate\Http\Request;
use App\Models\EgitimKategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EgitimController extends Controller
{
    public function egitim_index () {       
        $tops = DB::table('users')->orderBy('point', 'desc')->limit(5)->get();
        
        return view('egitim.index')            
            ->with('navbars', EgitimNavbar::all())            
            ->with('egitims', EgitimEgitim::latest()->paginate(4))
            ->with('kategoris', EgitimKategori::all())
            ->with('megitims', UserEgitim::join('egitim_egitims', 'egitim_egitims.id', '=', 'user_egitims.ders_id')->where('user_egitims.user_id', '=', auth()->user()->id)->paginate(4))
            ->with('eiceriks', EgitimIcerik::all())
            ->with('esinavs', EgitimSinav::all())
            ->with('tops', $tops);         
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
            ->with('yorumsay', EgitimYorum::where('egitim_id',$id)->get())
            ->with('sonras', UserSonra::where('ders_id', $id)->get())
            ->with('useres', UserEgitim::where('user_egitims.ders_id',$id)->where('user_egitims.user_id',auth()->user()->id)->get())
            ->with('sinavsay', EgitimSinav::leftJoin('egitim_iceriks', 'egitim_sinavs.icerik_id', '=', 'egitim_iceriks.id')->where('egitim_iceriks.egitim_id', '=', $id)->get())
            ->with('sonrasay', UserSonra::where('ders_id',$id)->get())
            ->with('usersay', UserEgitim::where('ders_id',$id)->get());
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
            ->with('egitims', EgitimEgitim::latest()->where('kategori_id', $id)->get());
    }

    public function derslerim()
    {
        return view('egitim.derslerim')            
            ->with('navbars', EgitimNavbar::all())
            ->with('derss', UserEgitim::join('egitim_egitims', 'egitim_egitims.id', '=', 'user_egitims.ders_id')->where('user_egitims.user_id', '=', auth()->user()->id)->paginate(12))
            ->with('yorums', EgitimYorum::where('kullanici_id', auth()->user()->id)->get())
            ->with('sonras', UserSonra::where('user_id', auth()->user()->id)->get())
            ->with('iceriks', UserIcerik::where('user_id', auth()->user()->id)->get())
            ->with('sinavs', UserSinav::where('user_id', auth()->user()->id)->get());
    }

    public function daha_sonra()
    {
        return view('egitim.sonra')            
            ->with('navbars', EgitimNavbar::all())
            ->with('derss', UserSonra::join('egitim_egitims', 'egitim_egitims.id', '=', 'user_sonras.ders_id')->where('user_sonras.user_id', '=', auth()->user()->id)->paginate(12));            
    }

    public function siralama()
    {
        $users = DB::table('users')->orderBy('point', 'desc')->get();

        return view('egitim.siralama')            
            ->with('navbars', EgitimNavbar::all())
            ->with('tops', $users);
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
            ->with('icerik', EgitimIcerik::where('egitim_iceriks.id','=', $id)->orderBy('egitim_iceriks.icerik_no', 'asc')->first())
            ->with('tamamdurumu', UserIcerik::where('user_id',auth()->user()->id)->get());
    }

    public function ders_kayit(Request $request, $id)
    {                              
        switch ($request->input('action')) {
            case 'join':
                    $user = Auth::user();        
                    UserEgitim::create([      
                        'user_id' => auth()->user()->id,
                        'ders_id' => $id,
                    ]);
                    
                    LogKayit::create([
                        'user_id' => auth()->user()->id,        
                        'icerik' => $id." dersine ".auth()->user()->name." kişisi kayıt oldu."
                    ]);
                            
                    return redirect()->back()->with('success', 'Ders kaydı başarı ile tamamlanmıştır!');
                break;
    
            case 'bookmarks':
                    $user = Auth::user();        
                    UserSonra::create([      
                        'user_id' => auth()->user()->id,
                        'ders_id' => $id,
                    ]); 
                    
                    LogKayit::create([
                        'user_id' => auth()->user()->id,        
                        'icerik' => $id." dersine ".auth()->user()->name." kişisi daha sonraya eklendi."
                    ]);
                            
                    return redirect()->back()->with('success', 'Ders daha sonra listesine eklenmiştir!');
                break;
        }
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

        LogKayit::create([
            'user_id' => auth()->user()->id,        
            'icerik' => $request->baslik." yorumu sisteme ".auth()->user()->name." tarafından ekledi."
        ]);

        return redirect()->back()->with('success', 'Ders yorumu başarı ile oluşturulmuştur!');
    }

    public function icerigi_tamamla(Request $request, $id)
    {
        $icerik_id = $id;
        $egitim_puan = $request->egitim_puan;
        $user_id = auth()->user()->id;
        print($icerik_id);
        // print("<br>");
        print($user_id);
        // print("<br>");
        print($egitim_puan);
        // print("<br>");
        
        $user_point = auth()->user()->point;    
        $gelecek_puan = $user_point + $egitim_puan;
        
        User::where('id', $user_id)->update(['point' => $gelecek_puan]);

        UserIcerik::create([
            'user_id' => auth()->user()->id,
            'icerik_id' => $icerik_id
        ]);

        LogKayit::create([
            'user_id' => auth()->user()->id,        
            'icerik' => $icerik_id." içeriğinden ".$egitim_puan." puan kazandı."
        ]);

        LogKayit::create([
            'user_id' => auth()->user()->id,        
            'icerik' => $icerik_id." içeriğini ".auth()->user()->name." tarafından tamamladı."
        ]);

        return redirect()->back()->with('success', 'İçerik başarı ile tamamlanmıştır!');
    }

    public function sinav_detay($id)
    {
        return view('egitim.sinav_detay')            
            ->with('navbars', EgitimNavbar::all())            
            ->with('sinav', EgitimSinav::where('egitim_sinavs.id','=', $id)->orderBy('egitim_sinavs.created_at', 'asc')->first())
            ->with('sorus', EgitimSoru::where('egitim_sorus.sinav_id','=',$id)->orderBy('egitim_sorus.soru_no', 'asc')->get())
            ->with('cevaps', EgitimCevap::leftJoin('egitim_sorus', 'egitim_cevaps.soru_id', '=', 'egitim_sorus.id')->where('egitim_sorus.sinav_id', '=', $id)->orderBy('egitim_cevaps.cevap_no', 'asc')->get())
            ->with('tamamdurumu', UserSinav::where('user_id',auth()->user()->id)->get());
    }

    public function sinavi_tamamla(Request $request, $id)
    {      
        $sinav_id = $id;  
        $names = $request->cevap_names;
        $myArray = explode(',', $names);

        $sinav_puan = $request->sinav_puan;
        $user_id = auth()->user()->id;                


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
        // print("<br>");
        // print("Doğru: ".$dogru);
        // print("<br>");
        // print("Yanlış: ".$yanlis);

        $soru_sayisi = $dogru + $yanlis;
        $soru_basina_puan = $sinav_puan / $soru_sayisi;
        $dogru_yanlis_puan = $dogru * $soru_basina_puan;

        $user_point = auth()->user()->point;    
        $gelecek_puan = $user_point + $dogru_yanlis_puan;

        User::where('id', $user_id)->update(['point' => $gelecek_puan]);

        EgitimPuan::create([
            'sinav_id' => $sinav_id,
            'dogru_sayisi' => $dogru,
            'yanlis_sayisi' => $yanlis,
            'puan' => $gelecek_puan,
            'admin' => '0'
        ]);

        UserSinav::create([
            'user_id' => auth()->user()->id,
            'sinav_id' => $sinav_id
        ]);

        LogKayit::create([
            'user_id' => auth()->user()->id,        
            'icerik' => $sinav_id." sınavından ".$dogru_yanlis_puan." puan kazandı."
        ]);

        LogKayit::create([
            'user_id' => auth()->user()->id,        
            'icerik' => $sinav_id." sınavı ".auth()->user()->name." tarafından tamamladı."
        ]);

        return redirect()->back()->with('success', 'Sınav başarı ile tamamlanmıştır!');
    }
}
