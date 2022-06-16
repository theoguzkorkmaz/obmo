<?php

namespace App\Http\Controllers\haber;

use App\Models\LogKayit;
use App\Models\HaberHaber;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Models\HaberKategori;
use App\Models\EgitimKategori;
use App\Http\Controllers\Controller;

class HaberHaberController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.haber.create')
        ->with('navbars', AdminNavbar::all())
        ->with('kategoris', HaberKategori::all());
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
				'icerik' => '',
        'resim' => '',
        'resim_aciklama' => '',
        'etiket' => '',
        'admin' => 'required' 
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			HaberHaber::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." oluşturuldu."
      ]);

			return redirect('/admin/haber/habers')
        ->with('success', 'Haber başarı ile oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberHaber $haber_haber)
    {
			return view('admin.haber.haber.edit', [
        'haber' => $haber_haber,
        'navbars' => AdminNavbar::all(),
        'kategoris' => HaberKategori::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HaberHaber $haber_haber) 
    {
			$formFields = $request->validate([
        'kategori_id' => '',
				'baslik' => '',
				'icerik' => '',
        'resim' => '',
        'resim_aciklama' => '',
        'etiket' => '',
        'admin' => 'required' 
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $haber_haber->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." güncellendi."
      ]);

      return redirect('/admin/haber/habers')
        ->with('success', 'Haber başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberHaber $haber_haber)
    {
			$haber_haber->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $haber_haber->baslik." silindi."
      ]);

      return redirect('/admin/haber/habers')
        ->with('success', 'Haber başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.haber.index', [
				'habers' => HaberHaber::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberHaber $haber_haber)
    {
			return view('admin.haber.haber.show', [
        'haber' =>  $haber_haber,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
