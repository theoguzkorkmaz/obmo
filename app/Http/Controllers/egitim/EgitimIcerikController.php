<?php

namespace App\Http\Controllers\egitim;

use App\Models\EgitimIcerik;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EgitimEgitim;

class EgitimIcerikController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.icerik.create')
        ->with('navbars', AdminNavbar::all())
        ->with('egitims', EgitimEgitim::all());
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
        'egitim_id' => 'required',
        'icerik_no' => 'required',
        'baslik' => 'required',
        'aciklama' => 'required',
        'video' => 'required',
        'video_aciklamasi' => 'required',
        'video_yazili' => 'required',
        'puan' => 'required',
        'admin' => 'required'
      ]);

      EgitimIcerik::create($formFields);

      return redirect('/admin/egitim/egitim_iceriks');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimIcerik $egitim_icerik)
    {
			return view('admin.egitim.icerik.edit', [
        'icerik' => $egitim_icerik,
        'navbars' => AdminNavbar::all(),
        'egitims' => EgitimEgitim::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgitimIcerik $egitim_icerik)
    {
			$formFields = $request->validate([
				'egitim_id' => 'required',
				'icerik_no' => 'required',
        'baslik' => 'required',
        'aciklama' => 'required',
        'video' => 'required',
        'video_aciklamasi' => 'required',
        'video_yazili' => 'required',
				'puan' => 'required',
        'admin' => 'required'
			]);

      $egitim_icerik->update($formFields);

      return redirect('/admin/egitim/egitim_iceriks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimIcerik $egitim_icerik)
    {
			$egitim_icerik->delete();
      return redirect('/admin/egitim/egitim_iceriks');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.icerik.index', [
				'iceriks' => EgitimIcerik::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimIcerik $egitim_icerik)
    {
			return view('admin.egitim.icerik.show', [
        'icerik' =>  $egitim_icerik,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
