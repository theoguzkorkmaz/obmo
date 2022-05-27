<?php

namespace App\Http\Controllers\egitim;

use App\Models\EgitimSinav;
use App\Models\EgitimNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EgitimSinavController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.sinav.create')->with('navbars', EgitimNavbar::all());
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
				'icerik_id' => 'required',
        'baslik' => 'required',
        'aciklama' => 'required',
        'admin' => 'required'
      ]);

      EgitimSinav::create($formFields);

      return redirect('/admin/egitim/egitim_sinavs');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimSinav $egitim_sinav)
    {
			return view('admin.egitim.sinav.edit', [
        'sinav' => $egitim_sinav,
        'navbars' => EgitimNavbar::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgitimSinav $egitim_sinav)
    {
			$formFields = $request->validate([
				'icerik_id' => 'required',
        'baslik' => 'required',
        'aciklama' => 'required',
        'admin' => 'required'
			]);

      $egitim_sinav->update($formFields);

      return redirect('/admin/egitim/egitim_sinavs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimSinav $egitim_sinav)
    {
			$egitim_sinav->delete();
      return redirect('/admin/egitim/egitim_sinavs');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.sinav.index', [
				'sinavs' => EgitimSinav::latest()->paginate(12),
        'navbars' => EgitimNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimSinav $egitim_sinav)
    {
			return view('admin.egitim.sinav.show', [
        'sinav' =>  $egitim_sinav,
        'navbars' => EgitimNavbar::all()
      ]);
    }
}
