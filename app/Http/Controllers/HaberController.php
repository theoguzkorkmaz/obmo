<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sosyal;
use App\Models\HaberHaber;
use App\Models\HaberSayfa;
use App\Models\HaberBulten;
use App\Models\HaberTopbar;
use Illuminate\Http\Request;
use App\Models\HaberKategori;
use App\Models\HaberYorum;
use Illuminate\Support\Facades\DB;

class HaberController extends Controller
{
    public function haber_index () {        
        return view('haber.index')
            ->with('topbars', HaberTopbar::all())
            ->with('kategoris', HaberKategori::all())
            ->with('sayfas', HaberSayfa::all())
            ->with('gundem', HaberHaber::latest()->first())
            ->with('gundems', HaberHaber::latest()->skip(1)->limit(4)->get())
            ->with('basliks', HaberHaber::latest()->skip(5)->limit(6)->get())
            ->with('habers', HaberHaber::latest()->paginate(12))
            ->with('kacirmas', HaberHaber::inRandomOrder()->limit(12)->get())
            ->with('fhabers', HaberHaber::inRandomOrder()->limit(4)->get())
            ->with('sosyals', Sosyal::all());
    }

    // public function haber_show(Request $request, HaberHaber $haber_id) {
    //     $request->route('id');
    //     return view('haber.detay')->with('haber', HaberHaber::where('id', '=', $request)->get());
    // }

    public function haber_show($id)
    {                
        return view('haber.haber_detay')
            ->with('topbars', HaberTopbar::all())
            ->with('kategoris', HaberKategori::all())
            ->with('sayfas', HaberSayfa::all())
            ->with('haber', HaberHaber::select('*', 'haber_habers.created_at as tarih')->leftJoin('haber_kategoris', 'haber_habers.kategori_id', '=', 'haber_kategoris.id')->where('haber_habers.id', '=', $id)->first())
            ->with('habert', HaberHaber::where('haber_habers.id', '=', $id)->first())
            ->with('yorums', HaberHaber::leftJoin('haber_yorums', 'haber_habers.id', '=', 'haber_yorums.haber_id')->where('haber_habers.id', '=', $id)->orderBy('haber_yorums.created_at', 'desc')->get())
            ->with('kacirmas', HaberHaber::inRandomOrder()->limit(10)->get())
            ->with('fhabers', HaberHaber::inRandomOrder()->limit(4)->get())
            ->with('sosyals', Sosyal::all())
            ->with('yazar', HaberHaber::leftJoin('users', 'haber_habers.admin', '=', 'users.id')->where('haber_habers.id', '=', $id)->first());
    }

    public function kategori_show($id)
    {                
        return view('haber.kategori_detay')
            ->with('topbars', HaberTopbar::all())
            ->with('kategoris', HaberKategori::all())
            ->with('sayfas', HaberSayfa::all())
            ->with('kategori', HaberKategori::where('haber_kategoris.id', '=', $id)->first())
            ->with('gundem', HaberHaber::where('haber_habers.kategori_id', '=', $id)->orderBy('haber_habers.created_at', 'desc')->first())
            ->with('gundems', HaberHaber::where('haber_habers.kategori_id', '=', $id)->orderBy('haber_habers.created_at', 'desc')->skip(1)->limit(4)->get())
            ->with('basliks', HaberHaber::where('haber_habers.kategori_id', '=', $id)->orderBy('haber_habers.created_at', 'desc')->skip(5)->limit(6)->get())
            ->with('habers', HaberHaber::where('haber_habers.kategori_id', '=', $id)->orderBy('haber_habers.created_at', 'desc')->paginate(12))
            ->with('kacirmas', HaberHaber::where('haber_habers.kategori_id', '=', $id)->inRandomOrder()->limit(12)->get())
            ->with('fhabers', HaberHaber::inRandomOrder()->limit(4)->get())
            ->with('sosyals', Sosyal::all())
            ->with('kategori1', HaberHaber::where('kategori_id', 1)->get())
            ->with('kategori2', HaberHaber::where('kategori_id', 2)->get());
    }

    public function sayfa_show($id)
    {        
        return view('haber.sayfa_detay')
            ->with('topbars', HaberTopbar::all())
            ->with('kategoris', HaberKategori::all())
            ->with('sayfas', HaberSayfa::all())
            ->with('sayfa', HaberSayfa::where('haber_sayfas.id', '=', $id)->first())
            ->with('kacirmas', HaberHaber::inRandomOrder()->limit(12)->get())
            ->with('fhabers', HaberHaber::inRandomOrder()->limit(4)->get())
            ->with('sosyals', Sosyal::all());
    }

    public function ara_show()
    {                
        return view('haber.ara')
            ->with('topbars', HaberTopbar::all())
            ->with('kategoris', HaberKategori::all())
            ->with('sayfas', HaberSayfa::all())            
            ->with('kacirmas', HaberHaber::inRandomOrder()->limit(12)->get())
            ->with('habers', HaberHaber::latest()->filter(request(['ara']))->paginate(12))
            ->with('habersd', HaberHaber::inRandomOrder()->limit(10)->paginate(12))
            ->with('fhabers', HaberHaber::inRandomOrder()->limit(4)->get())
            ->with('sosyals', Sosyal::all());
    } 

    public function kategoriler_show()
    {        
        return view('haber.kategoriler')
            ->with('topbars', HaberTopbar::all())
            ->with('kategoris', HaberKategori::latest()->paginate())
            ->with('sayfas', HaberSayfa::all())            
            ->with('kacirmas', HaberHaber::inRandomOrder()->limit(12)->get())
            ->with('fhabers', HaberHaber::inRandomOrder()->limit(4)->get())
            ->with('sosyals', Sosyal::all());
    }

    public function bulten(Request $request)
    {        
        $mail = $request->mail;
        HaberBulten::create([
            'mail' => $mail
        ]);

        return redirect()->back();
    }

    public function haber_yorum(Request $request, $id) {        
        $baslik = $request->baslik;
        $icerik = $request->icerik;
        $user = auth()->user()->id;
        $haber = $id;
        HaberYorum::create([
            'haber_id' => $haber,
            'user_id' => $user,
            'baslik' => $baslik,
            'icerik' => $icerik,
            'admin' => '0'
        ]);

        return redirect()->back();
    }
}
