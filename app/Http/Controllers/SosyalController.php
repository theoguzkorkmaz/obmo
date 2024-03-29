<?php

namespace App\Http\Controllers;

use App\Models\Sosyal;
use App\Models\LogKayit;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;

class SosyalController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.sosyal.create')
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
				'icon' => '',
				'link' => 'required',
				'aciklama' => '',
        'aktiflik' => 'required',
        'admin' => 'required'        
			]);

			Sosyal::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." oluşturuldu."
      ]);

			return redirect('/admin/sosyals')
        ->with('success', 'Sosyal mecra başarı ile oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sosyal $sosyal)
    {
			return view('admin.sosyal.edit', [
        'sosyal' => $sosyal,
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
    public function update(Request $request, Sosyal $sosyal)
    {
			$formFields = $request->validate([
				'ad' => '',
				'icon' => '',
				'link' => '',
				'aciklama' => '',
        'aktiflik' => '',
        'admin' => 'required'        
			]);

			$sosyal->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." güncellendi."
      ]);

      return redirect('/admin/sosyals')
        ->with('success', 'Sosyal mecra başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosyal $sosyal)
    {
			$sosyal->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $sosyal->ad." silindi."
      ]);

      return redirect('/admin/sosyals')
        ->with('success', 'Sosyal mecra başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.sosyal.index', [
				'sosyals' => Sosyal::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(Sosyal $sosyal)
    {
			return view('admin.sosyal.show', [
        'sosyal' =>  $sosyal,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
