<?php

namespace App\Http\Controllers\haber;

use App\Models\User;
use App\Models\LogKayit;
use App\Models\HaberHaber;
use App\Models\HaberYorum;
use App\Models\AdminNavbar;
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
      return view('admin.haber.yorum.create')
        ->with('navbars', AdminNavbar::all())
        ->with('habers', HaberHaber::all())
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
				'haber_id' => 'required',
				'user_id' => 'required',
				'baslik' => '',
				'icerik' => '',
        'onay' => 'required'    ,
        'admin' => 'required'    
			]); 

			HaberYorum::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." oluşturuldu."
      ]);

			return redirect('/admin/haber/haber_yorums')
        ->with('success', 'Haber yorum başarı ile oluşturuldu!');
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
        'navbars' => AdminNavbar::all(),
        'habers' => HaberHaber::all(),
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
    public function update(Request $request, HaberYorum $haber_yorum)
    {
			$formFields = $request->validate([
        'haber_id' => 'required',
				'user_id' => 'required',
				'baslik' => '',
				'icerik' => '',
        'onay' => 'required',
        'admin' => 'required'        
      ]);

      $haber_yorum->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->baslik." güncellendi."
      ]);

      return redirect('/admin/haber/haber_yorums')
        ->with('success', 'Haber yorum başarı ile güncellendi!');
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

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $haber_yorum->baslik." silindi."
      ]);

      return redirect('/admin/haber/haber_yorums')
        ->with('success', 'Haber yorum başarı ile silindi!');
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
        'navbars' => AdminNavbar::all()
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
        'navbars' => AdminNavbar::all()
      ]);
    }
}
