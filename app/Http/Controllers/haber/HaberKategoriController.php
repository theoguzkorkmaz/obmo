<?php

namespace App\Http\Controllers\haber;

use App\Models\LogKayit;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Models\HaberKategori;
use App\Http\Controllers\Controller;

class HaberKategoriController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.kategori.create')
        ->with('navbars', AdminNavbar::all());
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
				'aciklama' => '',
        'resim' => '',
        'resim_aciklama' => '',
        'icon' => '',
        'navbar_gorunme' => 'required',
        'footer_gorunme' => 'required',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      HaberKategori::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." oluşturuldu."
      ]);

      return redirect('/admin/haber/haber_kategoris')
        ->with('success', 'Haber kategori başarı ile oluşturuldu!');
		}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberKategori $haber_kategori)
    {
			return view('admin.haber.kategori.edit', [
        'kategori' => $haber_kategori,
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
    public function update(Request $request, HaberKategori $haber_kategori)
    {
			$formFields = $request->validate([
        'ad' => '',
				'aciklama' => '',
        'resim' => '',
        'resim_aciklama' => '',
        'icon' => '',
        'navbar_gorunme' => '',
        'footer_gorunme' => '',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $haber_kategori->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." güncellendi."
      ]);

      return redirect('/admin/haber/haber_kategoris')
        ->with('success', 'Haber kategori başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberKategori $haber_kategori)
    {
			$haber_kategori->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $haber_kategori->ad." silindi."
      ]);

      return redirect('/admin/haber/haber_kategoris')
        ->with('success', 'Haber kategori başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.kategori.index', [
				'kategoris' => HaberKategori::latest()->paginate(12), 
        'navbars' => AdminNavbar::all() 
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberKategori $haber_kategori)
    {
			return view('admin.haber.kategori.show', [
        'kategori' =>  $haber_kategori,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
