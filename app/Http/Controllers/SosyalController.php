<?php

namespace App\Http\Controllers;

use App\Models\Sosyal;
use Illuminate\Http\Request;

class SosyalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			return view('sosyal.index', [
        'sosyals' => Sosyal::latest()->get()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.sosyal.create');
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
				'icon' => 'required',
				'link' => 'required',
				'aciklama' => 'required',
        'aktiflik' => 'required',
        'admin' => 'required'        
			]);

			Sosyal::create($formFields);

			return redirect('/admin/sosyals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sosyal $sosyal)
    {
			return view('sosyal.show', [
        'sosyal' =>  $sosyal
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sosyal $sosyal)
    {
			return view('admin.sosyal.edit', [
        'sosyal' => $sosyal 
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sosyal $sosyal)
    {
			$formFields = $request->validate([
				'ad' => 'required',
				'icon' => 'required',
				'link' => 'required',
				'aciklama' => 'required',
        'aktiflik' => 'required',
        'admin' => 'required'        
			]);

			$sosyal->update($formFields);

      return redirect('/admin/sosyals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sosyal $sosyal)
    {
			$sosyal->delete();
      return redirect('/admin/sosyals');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.sosyal.index', [
				'sosyals' => Sosyal::latest()->get()
			]);
    }

		/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(Sosyal $sosyal)
    {
			return view('admin.sosyal.show', [
        'sosyal' =>  $sosyal
      ]);
    }
}
