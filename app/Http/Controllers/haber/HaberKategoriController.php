<?php

namespace App\Http\Controllers\haber;

use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Models\HaberKategori;
use App\Http\Controllers\Controller;

class HaberKategoriController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.kategori.create')->with('navbars', AdminNavbar::all());
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberKategori $haber_kategori)
    {
			return view('admin.haber.kategori.edit', [
        'kategori' => $haber_kategori,
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
				'kategoris' => HaberKategori::latest()->paginate(12), 
        'navbars' => AdminNavbar::all() 
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
        'kategori' =>  $haber_kategori,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
