<?php

namespace App\Http\Controllers\haber;

use App\Models\LogKayit;
use App\Models\HaberSayfa;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HaberSayfaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.sayfa.create')->with('navbars', AdminNavbar::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$formFields = $request->validate([				
				'ad' => 'required',
				'icerik' => '',
        'resim' => '',
        'navbar_gorunme' => 'required',
        'footer_gorunme' => 'required',
        'admin' => 'required'
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			HaberSayfa::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." oluşturuldu."
      ]);

			return redirect('/admin/haber/haber_sayfas')->with('success', 'Haber sayfa başarı ile oluşturuldu!'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberSayfa $haber_sayfa)
    {
			return view('admin.haber.sayfa.edit', [
        'sayfa' => $haber_sayfa,
        'navbars' => AdminNavbar::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HaberSayfa $haber_sayfa)
    {
			$formFields = $request->validate([
        'ad' => '',
				'icerik' => '',
        'resim' => '',
        'navbar_gorunme' => '',
        'footer_gorunme' => '',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $haber_sayfa->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." güncellendi."
      ]);

      return redirect('/admin/haber/haber_sayfas')->with('success', 'Haber sayfa başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberSayfa $haber_sayfa)
    {
			$haber_sayfa->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $haber_sayfa->ad." silindi."
      ]);

      return redirect('/admin/haber/haber_sayfas')->with('success', 'Haber sayfa başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.sayfa.index', [
				'sayfas' => HaberSayfa::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberSayfa $haber_sayfa)
    {
			return view('admin.haber.sayfa.show', [
        'sayfa' =>  $haber_sayfa,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
