<?php

namespace App\Http\Controllers\egitim;

use App\Models\LogKayit;
use App\Models\EgitimSoru;
use App\Models\AdminNavbar;
use App\Models\EgitimSinav;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EgitimSoruController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.soru.create')
        ->with('navbars', AdminNavbar::all())
        ->with('sinavs', EgitimSinav::all());
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
				'sinav_id' => 'required',
				'soru_no' => 'required',
        'soru' => 'required',
				'resim_aciklama' => 'required',
        'admin' => 'required'
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			EgitimSoru::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->soru." oluşturuldu."
      ]);

			return redirect('/admin/egitim/egitim_sorus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimSoru $egitim_soru)
    {
			return view('admin.egitim.soru.edit', [
        'soru' => $egitim_soru,
        'navbars' => AdminNavbar::all(),
        'sinavs' => EgitimSinav::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgitimSoru $egitim_soru)
    {
			$formFields = $request->validate([
        'sinav_id' => 'required',
				'soru_no' => 'required',
        'soru' => 'required',
				'resim_aciklama' => 'required',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $egitim_soru->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->soru." güncellendi."
      ]);

      return redirect('/admin/egitim/egitim_sorus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimSoru $egitim_soru)
    {
			$egitim_soru->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $egitim_soru->soru." silindi."
      ]);

      return redirect('/admin/egitim/egitim_sorus');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {
      return view('admin.egitim.soru.index', [
				'sorus' => EgitimSoru::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimSoru $egitim_soru)
    {
			return view('admin.egitim.soru.show', [
        'soru' =>  $egitim_soru,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
