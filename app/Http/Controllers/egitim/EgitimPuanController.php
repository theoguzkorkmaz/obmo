<?php

namespace App\Http\Controllers\egitim;

use App\Models\EgitimPuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EgitimPuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			return view('egitim.puan.index', [
				'puans' => EgitimPuan::latest()->get()
			]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.puan.create');
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

			return redirect('/admin/egitim/egitim_puans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(EgitimPuan $egitim_puan)
    {
			return view('egitim.puan.show', [
        'puan' =>  $egitim_puan
      ]);
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
        'puan' => $egitim_puan 
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

      return redirect('/admin/egitim/egitim_puans');
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
      return redirect('/admin/egitim/egitim_puans');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.puan.index', [
				'puans' => EgitimPuan::latest()->get()
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
        'puan' =>  $egitim_puan
      ]);
    }
}
