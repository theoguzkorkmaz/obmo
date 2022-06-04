<?php

namespace App\Http\Controllers\haber;

use App\Models\LogKayit;
use App\Models\AdminNavbar;
use App\Models\HaberTopbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HaberTopbarController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {			
			return view('admin.haber.topbar.create')->with('navbars', AdminNavbar::all()); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
      $formFields = $request->validate([
        'ad' => 'required',
				'link' => 'required',
				'aciklama' => '',
        'yer' => 'required',
        'icon' => '',
        'admin' => 'required'
      ]);

      HaberTopbar::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." oluşturuldu."
      ]);

      return redirect('/admin/haber/haber_topbars')->with('success', 'Haber topbar başarı ile oluşturuldu!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberTopbar $haber_topbar)
    {
			return view('admin.haber.topbar.show', [
        'topbar' =>  $haber_topbar,
        'navbars' => AdminNavbar::all()
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberTopbar $haber_topbar)
    {
			return view('admin.haber.topbar.edit', [
        'topbar' => $haber_topbar,
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
    public function update(Request $request, HaberTopbar $haber_topbar)
    {
			$formFields = $request->validate([
        'ad' => '',
				'link' => '',
				'aciklama' => '',
        'yer' => '',
        'icon' => '',
        'admin' => 'required'
      ]);      

      $haber_topbar->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." güncellendi."
      ]);

      return redirect('/admin/haber/haber_topbars')->with('success', 'Haber topbar başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberTopbar $haber_topbar)
    {
			$haber_topbar->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $haber_topbar->ad." silindi."
      ]);

      return redirect('/admin/haber/haber_topbars')->with('success', 'Haber topbar başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.topbar.index', [
				'topbars' => HaberTopbar::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }
}
