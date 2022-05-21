<?php

namespace App\Http\Controllers\haber;

use App\Models\HaberSayfa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HaberSayfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
			return view('haber.sayfa.index', [
				'sayfas' => HaberSayfa::latest()->get()
			]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.haber.sayfa.create');
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
				'icerik' => 'required',
        'navbar_gorunme' => 'required',
        'footer_gorunme' => 'required',
        'admin' => 'required'
			]);

			if($request->hasFile('resim')) {
				$formFields['resim'] = $request->file('resim')->store('images', 'public');
			}

			HaberSayfa::create($formFields);

			return redirect('/admin/haber/haber_sayfas'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HaberSayfa $haber_sayfa)
    {
			return view('haber.sayfa.show', [
        'sayfa' =>  $haber_sayfa
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberSayfa $haber_sayfa)
    {
			return view('admin.haber.sayfa.edit', [
        'sayfa' => $haber_sayfa 
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HaberSayfa $haber_sayfa)
    {
			$formFields = $request->validate([
        'ad' => 'required',
				'icerik' => 'required',
        'navbar_gorunme' => 'required',
        'footer_gorunme' => 'required',
        'admin' => 'required'
      ]);

      if($request->hasFile('resim')) {
        $formFields['resim'] = $request->file('resim')->store('images', 'public');
      }

      $haber_sayfa->update($formFields);

      return redirect('/admin/haber/haber_sayfas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberSayfa $haber_sayfa)
    {
			$haber_sayfa->delete();
      return redirect('/admin/haber/haber_sayfas');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.sayfa.index', [
				'sayfas' => HaberSayfa::latest()->get()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberSayfa $haber_sayfa)
    {
			return view('admin.haber.sayfa.show', [
        'sayfa' =>  $haber_sayfa
      ]);
    }
}
