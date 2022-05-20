<?php

namespace App\Http\Controllers\egitim;

use App\Http\Controllers\Controller;
use App\Models\EgitimSinav;
use Illuminate\Http\Request;

class EgitimSinavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			return view('egitim.sinav.index', [
				'sinavs' => EgitimSinav::latest()->get()
			]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.sinav.create');
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
        'aciklama' => 'required'
      ]);

      EgitimSinav::create($formFields);

      return redirect('/admin/egitim/egitim_sinavs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EgitimSinav $egitim_sinav)
    {
			return view('egitim.sinav.show', [
        'sinav' =>  $egitim_sinav
      ]);
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
        'sinav' => $egitim_sinav 
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
        'aciklama' => 'required'
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
				'sinavs' => EgitimSinav::latest()->get()
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
			return view('admin.egitim.sinav	.show', [
        'sinav' =>  $egitim_sinav
      ]);
    }
}
