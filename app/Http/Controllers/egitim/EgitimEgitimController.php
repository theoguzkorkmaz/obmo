<?php

namespace App\Http\Controllers\egitim;

use App\Http\Controllers\Controller;
use App\Models\EgitimEgitim;
use Illuminate\Http\Request;

class EgitimEgitimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			return view('egitim.egitim.index', [
				'egitims' => EgitimEgitim::latest()->get() 
			]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.egitim.create');
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
				'icerik' => 'required',
        'resim_aciklama' => 'required',
        'etiket' => 'required'
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			EgitimEgitim::create($formFields);

			return redirect('/admin/egitim/egitims');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EgitimEgitim $egitim_egitim)
    {
			return view('egitim.egitim.show', [
        'egitim' =>  $egitim_egitim
      ]);
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
        'egitim' => $egitim_egitim 
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
        'kategori_id' => 'required',
				'baslik' => 'required',
				'icerik' => 'required',
        'resim_aciklama' => 'required',
        'etiket' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $egitim_egitim->update($formFields);

      return redirect('/admin/egitim/egitims');
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
      return redirect('/admin/egitim/egitims');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.egitim.index', [
				'egitims' => EgitimEgitim::latest()->get()
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
        'egitim' =>  $egitim_egitim
      ]);
    }
}
