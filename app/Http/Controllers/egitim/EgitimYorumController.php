<?php

namespace App\Http\Controllers\egitim;

use App\Models\User;
use App\Models\EgitimYorum;
use App\Models\EgitimEgitim;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EgitimYorumController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.yorum.create')
        ->with('navbars', AdminNavbar::all())
        ->with('egitims', EgitimEgitim::all())
        ->with('users', User::all());
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
				'kullanici_id' => 'required',
        'baslik' => 'required',
        'icerik' => 'required',
        'admin' => 'required'
				]);

				EgitimYorum::create($formFields);

				return redirect('/admin/egitim/egitim_yorums');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimYorum $egitim_yorum)
    {
			return view('admin.egitim.yorum.edit', [
        'yorum' => $egitim_yorum,
        'navbars' => AdminNavbar::all(),
        'egitims' => EgitimEgitim::all(),
        'users' => User::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EgitimYorum $egitim_yorum)
    {
			$formFields = $request->validate([
				'egitim_id' => 'required',
				'kullanici_id' => 'required',
        'baslik' => 'required',
        'icerik' => 'required',
        'admin' => 'required'
			]);

      $egitim_yorum->update($formFields);

      return redirect('/admin/egitim/egitim_yorums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimYorum $egitim_yorum)
    {
			$egitim_yorum->delete();
      return redirect('/admin/egitim/egitim_yorums');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.yorum.index', [
				'yorums' => EgitimYorum::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimYorum $egitim_yorum)
    {
			return view('admin.egitim.yorum.show', [
        'yorum' =>  $egitim_yorum,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
