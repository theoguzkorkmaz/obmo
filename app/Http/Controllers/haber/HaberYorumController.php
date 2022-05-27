<?php

namespace App\Http\Controllers\haber;

use App\Models\HaberYorum;
use App\Models\EgitimNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HaberYorumController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.haber.yorum.create')->with('navbars', EgitimNavbar::all()); 
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
				'haber_id' => 'required',
				'user_id' => 'required',
				'baslik' => 'required',
				'icerik' => 'required',
        'onay' => 'required'    ,
        'admin' => 'required'    
			]);

			HaberYorum::create($formFields);

			return redirect('/admin/haber/haber_yorums');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HaberYorum $haber_yorum)
    {
			return view('admin.haber.yorum.edit', [
        'yorum' => $haber_yorum,
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
    public function update(Request $request, HaberYorum $haber_yorum)
    {
			$formFields = $request->validate([
        'haber_id' => 'required',
				'user_id' => 'required',
				'baslik' => 'required',
				'icerik' => 'required',
        'onay' => 'required',
        'admin' => 'required'        
      ]);

      $haber_yorum->update($formFields);

      return redirect('/admin/haber/haber_yorums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HaberYorum $haber_yorum)
    {
			$haber_yorum->delete();
      return redirect('/admin/haber/haber_yorums');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.haber.yorum.index', [
				'yorums' => HaberYorum::latest()->paginate(12),
        'navbars' => EgitimNavbar::all()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(HaberYorum $haber_yorum)
    {
			return view('admin.haber.yorum.show', [
        'yorum' =>  $haber_yorum,
        'navbars' => EgitimNavbar::all()
      ]);
    }
}
