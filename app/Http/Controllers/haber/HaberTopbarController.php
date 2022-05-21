<?php

namespace App\Http\Controllers\haber;

use App\Http\Controllers\Controller;
use App\Models\HaberTopbar;
use Illuminate\Http\Request;

class HaberTopbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {			
			return view('haber.topbar.index', [
				'topbars' => HaberTopbar::latest()->get()
			]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {			
			return view('admin.haber.topbar.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
      $formFields = $request->validate([
        'ad' => 'required',
				'link' => 'required',
				'aciklama' => 'required',
        'yer' => 'required',
        'icon' => 'required',
        'admin' => 'required'
      ]);

      HaberTopbar::create($formFields);

      return redirect('/admin/haber/haber_topbars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberTopbar $haber_topbar)
    {
			return view('admin.haber.topbar.show', [
        'topbar' =>  $haber_topbar
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberTopbar $haber_topbar)
    {
			return view('admin.haber.topbar.edit', [
        'topbar' => $haber_topbar
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HaberTopbar $haber_topbar)
    {
			$formFields = $request->validate([
        'ad' => 'required',
				'link' => 'required',
				'aciklama' => 'required',
        'yer' => 'required',
        'icon' => 'required',
        'admin' => 'required'
      ]);      

      $haber_topbar->update($formFields);

      return redirect('/admin/haber/haber_topbars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberTopbar $haber_topbar)
    {
			$haber_topbar->delete();
      return redirect('/admin/haber/haber_topbars');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.topbar.index', [
				'topbars' => HaberTopbar::latest()->get()
			]);
    }
}
