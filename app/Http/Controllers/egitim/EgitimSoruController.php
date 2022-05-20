<?php

namespace App\Http\Controllers\egitim;

use App\Models\EgitimSoru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EgitimSoruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('egitim.soru.index', [
				'sorus' => EgitimSoru::latest()->get()
			]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.soru.create');
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
				'resim_aciklama' => 'required'
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			EgitimSoru::create($formFields);

			return redirect('/admin/egitim/egitim_sorus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EgitimSoru $egitim_soru)
    {
			return view('egitim.soru.show', [
        'soru' =>  $egitim_soru
      ]);
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
        'soru' => $egitim_soru 
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
				'resim_aciklama' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $egitim_soru->update($formFields);

      return redirect('/admin/egitim/egitim_kategoris');
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
				'sorus' => EgitimSoru::latest()->get()
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
        'soru' =>  $egitim_soru
      ]);
    }
}