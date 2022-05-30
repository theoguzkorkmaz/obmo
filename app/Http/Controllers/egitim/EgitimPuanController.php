<?php

namespace App\Http\Controllers\egitim;

use App\Models\EgitimPuan;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EgitimSinav;

class EgitimPuanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.puan.create')
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
        'dogru_sayisi' => 'required',
        'yanlis_sayisi' => 'required',
				'puan' => 'required',
        'admin' => 'required'
			]);

			EgitimPuan::create($formFields);

			return redirect('/admin/egitim/egitim_puans')->with('success', 'Eğitim puan başarı ile oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimPuan $egitim_puan)
    {
			return view('admin.egitim.puan.edit', [
        'puan' => $egitim_puan,
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
    public function update(Request $request, EgitimPuan $egitim_puan)
    {
			$formFields = $request->validate([
				'sinav_id' => 'required',
        'dogru_sayisi' => 'required',
        'yanlis_sayisi' => 'required',
				'puan' => 'required',
        'admin' => 'required'
			]);

      $egitim_puan->update($formFields);

      return redirect('/admin/egitim/egitim_puans')->with('success', 'Eğitim puan başarı ile güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimPuan $egitim_puan)
    {
			$egitim_puan->delete();
      return redirect('/admin/egitim/egitim_puans')->with('success', 'Eğitim puan başarı ile silindi!');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.puan.index', [
				'puans' => EgitimPuan::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimPuan $egitim_puan)
    {
			return view('admin.egitim.puan.show', [
        'puan' =>  $egitim_puan,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
