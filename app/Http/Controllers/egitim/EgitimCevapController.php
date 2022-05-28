<?php

namespace App\Http\Controllers\egitim;

use App\Models\EgitimCevap;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EgitimSoru;

class EgitimCevapController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.cevap.create')
        ->with('navbars', AdminNavbar::all())
        ->with('sorus', EgitimSoru::all());
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
				'soru_id' => 'required',
        'cevap_no' => 'required',
        'icerik' => 'required',
				'dogru' => 'required',
        'admin' => 'required'
			]);

			EgitimCevap::create($formFields);

			return redirect('/admin/egitim/egitim_cevaps');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimCevap $egitim_cevap)
    {
			return view('admin.egitim.cevap.edit', [
        'cevap' => $egitim_cevap,
        'navbars' => AdminNavbar::all(),
        'sorus' => EgitimSoru::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgitimCevap $egitim_cevap)
    {
			$formFields = $request->validate([
				'soru_id' => 'required',
        'cevap_no' => 'required',
        'icerik' => 'required',
				'dogru' => 'required',
        'admin' => 'required'
			]);

      $egitim_cevap->update($formFields);

      return redirect('/admin/egitim/egitim_cevaps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimCevap $egitim_cevap)
    {
			$egitim_cevap->delete();
      return redirect('/admin/egitim/egitim_cevaps');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.cevap.index', [
				'cevaps' => EgitimCevap::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimCevap $egitim_cevap)
    {
			return view('admin.egitim.cevap.show', [
        'cevap' =>  $egitim_cevap,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
