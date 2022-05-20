<?php

namespace App\Http\Controllers\haber;

use App\Http\Controllers\Controller;
use App\Models\HaberHaber;
use Illuminate\Http\Request;

class HaberHaberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			return view('haber.haber.index', [
				'habers' => HaberHaber::latest()->get() 
			]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.haber.create');
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

			HaberHaber::create($formFields);

			return redirect('/admin/haber/habers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HaberHaber $haber_haber)
    {
			return view('haber.haber.show', [
        'haber' =>  $haber_haber
      ]);
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
        'haber' => $haber_haber 
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
        'etiket' => 'required'
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
				'habers' => HaberHaber::latest()->get()
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
        'haber' =>  $haber_haber
      ]);
    }
}
