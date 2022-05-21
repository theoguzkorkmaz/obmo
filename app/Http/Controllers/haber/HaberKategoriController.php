<?php

namespace App\Http\Controllers\haber;

use App\Http\Controllers\Controller;
use App\Models\HaberKategori;
use Illuminate\Http\Request;

class HaberKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			return view('haber.kategori.index', [
				'kategories' => HaberKategori::latest()->get()
			]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.kategori.create');
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
				'aciklama' => 'required',
        'resim_aciklama' => 'required',
        'icon' => 'required',
        'navbar_gorunme' => 'required',
        'footer_gorunme' => 'required',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      HaberKategori::create($formFields);

      return redirect('/admin/haber/haber_kategoris');
		}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HaberKategori $haber_kategori)
    {
			return view('haber.kategori.show', [
        'kategori' =>  $haber_kategori
      ]);
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
        'kategori' => $haber_kategori 
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
        'ad' => 'required',
				'aciklama' => 'required',
        'resim_aciklama' => 'required',
        'icon' => 'required',
        'navbar_gorunme' => 'required',
        'footer_gorunme' => 'required',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $haber_kategori->update($formFields);

      return redirect('/admin/haber/haber_kategoris');
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
      return redirect('/admin/haber/haber_kategoris');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.kategori.index', [
				'kategoris' => HaberKategori::latest()->get()
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
        'kategori' =>  $haber_kategori
      ]);
    }
}
