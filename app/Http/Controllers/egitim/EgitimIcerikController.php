<?php

namespace App\Http\Controllers\egitim;

use App\Models\LogKayit;
use App\Models\AdminNavbar;
use App\Models\EgitimEgitim;
use App\Models\EgitimIcerik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EgitimIcerikController extends Controller
{
    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.icerik.create')
        ->with('navbars', AdminNavbar::all())
        ->with('egitims', EgitimEgitim::all());
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
        'egitim_id' => 'required',
        'icerik_no' => 'required',
        'baslik' => 'required',
        'aciklama' => '',
        'video' => 'required',
        'video_aciklamasi' => '',
        'video_yazili' => '',
        'puan' => '',
        'admin' => 'required'
      ]);

      EgitimIcerik::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." oluşturuldu."
      ]); 

      return redirect('/admin/egitim/egitim_iceriks')->with('success', 'Eğitim içerik başarı ile oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimIcerik $egitim_icerik)
    {
			return view('admin.egitim.icerik.edit', [
        'icerik' => $egitim_icerik,
        'navbars' => AdminNavbar::all(),
        'egitims' => EgitimEgitim::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgitimIcerik $egitim_icerik)
    {
			$formFields = $request->validate([
				'egitim_id' => '',
        'icerik_no' => '',
        'baslik' => '',
        'aciklama' => '',
        'video' => '',
        'video_aciklamasi' => '',
        'video_yazili' => '',
        'puan' => '',
        'admin' => 'required'
			]);

      $egitim_icerik->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." güncellendi."
      ]);

      return redirect('/admin/egitim/egitim_iceriks')->with('success', 'Eğitim içerik başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimIcerik $egitim_icerik)
    {
			$egitim_icerik->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $egitim_icerik->baslik." silindi."
      ]);

      return redirect('/admin/egitim/egitim_iceriks')->with('success', 'Eğitim içerik başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.icerik.index', [
				'iceriks' => EgitimIcerik::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimIcerik $egitim_icerik)
    {
			return view('admin.egitim.icerik.show', [
        'icerik' =>  $egitim_icerik,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
