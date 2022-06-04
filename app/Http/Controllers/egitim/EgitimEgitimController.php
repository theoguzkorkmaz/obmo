<?php

namespace App\Http\Controllers\egitim;

use App\Models\LogKayit;
use App\Models\AdminNavbar;
use App\Models\EgitimEgitim;
use Illuminate\Http\Request;
use App\Models\EgitimKategori;
use App\Http\Controllers\Controller;

class EgitimEgitimController extends Controller
{
    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.egitim.create')
        ->with('navbars', AdminNavbar::all())
        ->with('kategoris', EgitimKategori::all());
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
				'kategori_id' => 'required',
				'baslik' => 'required',
        'aciklama' => '',
				'icerik' => '',
        'resim' => '',
        'resim_aciklama' => '',
        'etiket' => '',
        'kitle' => '', 
        'kazanim' => '',
        'dokuman' => '',        
        'admin' => 'required'
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			EgitimEgitim::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." oluşturuldu."
      ]); 

			return redirect('/admin/egitim/egitims')->with('success', 'Eğitim başarı ile oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimEgitim $egitim_egitim)
    {
			return view('admin.egitim.egitim.edit', [
        'egitim' => $egitim_egitim,
        'navbars' => AdminNavbar::all(),
        'kategoris' => EgitimKategori::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgitimEgitim $egitim_egitim)
    {
			$formFields = $request->validate([
        'kategori_id' => '',
				'baslik' => '',
        'aciklama' => '',
				'icerik' => '',
        'resim' => '',
        'resim_aciklama' => '',
        'etiket' => '',
        'kitle' => '', 
        'kazanim' => '',
        'dokuman' => '',        
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $egitim_egitim->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." güncellendi."
      ]);

      return redirect('/admin/egitim/egitims')->with('success', 'Eğitim başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimEgitim $egitim_egitim)
    {
			$egitim_egitim->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $egitim_egitim->baslik." silindi."
      ]);

      return redirect('/admin/egitim/egitims')->with('success', 'Eğitim başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.egitim.index', [
				'egitims' => EgitimEgitim::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimEgitim $egitim_egitim)
    {
			return view('admin.egitim.egitim.show', [
        'egitim' =>  $egitim_egitim,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
