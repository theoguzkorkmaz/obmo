<?php

namespace App\Http\Controllers\egitim;

use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Models\EgitimKategori;
use App\Http\Controllers\Controller;

class EgitimKategoriController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.kategori.create')->with('navbars', AdminNavbar::all());
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
				'baslik' => 'required',
				'aciklama' => 'required',
        'resim_aciklama' => 'required',
        'icon' => 'required',
        'admin' => 'required'
				]);

        if($request->hasFile('resim')) {
          $formFields['resim'] = $request->file('resim')->store('images', 'public');
        }

				EgitimKategori::create($formFields);

				return redirect('/admin/egitim/egitim_kategoris');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimKategori $egitim_kategori)
    {
			return view('admin.egitim.kategori.edit', [
        'kategori' => $egitim_kategori,
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
    public function update(Request $request, EgitimKategori $egitim_kategori)
    {
			$formFields = $request->validate([
        'baslik' => 'required',
				'aciklama' => 'required',
        'resim_aciklama' => 'required',
        'icon' => 'required',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $egitim_kategori->update($formFields);

      return redirect('/admin/egitim/egitim_kategoris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimKategori $egitim_kategori)
    {
			$egitim_kategori->delete();
      return redirect('/admin/egitim/egitim_kategoris');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.kategori.index', [
				'kategoris' => EgitimKategori::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimKategori $egitim_kategori)
    {
			return view('admin.egitim.kategori.show', [
        'kategori' =>  $egitim_kategori,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
