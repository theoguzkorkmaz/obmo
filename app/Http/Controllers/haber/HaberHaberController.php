<?php

namespace App\Http\Controllers\haber;

use App\Models\HaberHaber;
use App\Models\EgitimNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HaberHaberController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.haber.create')->with('navbars', EgitimNavbar::all());
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
        'etiket' => 'required',
        'admin' => 'required'
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			HaberHaber::create($formFields);

			return redirect('/admin/haber/habers');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberHaber $haber_haber)
    {
			return view('admin.haber.haber.edit', [
        'haber' => $haber_haber,
        'navbars' => EgitimNavbar::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HaberHaber $haber_haber) 
    {
			$formFields = $request->validate([
        'kategori_id' => 'required',
				'baslik' => 'required',
				'icerik' => 'required',
        'resim_aciklama' => 'required',
        'etiket' => 'required',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $haber_haber->update($formFields);

      return redirect('/admin/haber/habers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberHaber $haber_haber)
    {
			$haber_haber->delete();
      return redirect('/admin/haber/habers');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.haber.index', [
				'habers' => HaberHaber::latest()->paginate(12),
        'navbars' => EgitimNavbar::all()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberHaber $haber_haber)
    {
			return view('admin.haber.haber.show', [
        'haber' =>  $haber_haber,
        'navbars' => EgitimNavbar::all()
      ]);
    }
}
