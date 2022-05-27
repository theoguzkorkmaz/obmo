<?php

namespace App\Http\Controllers\egitim;

use App\Http\Controllers\Controller;
use App\Models\EgitimNavbar;
use Illuminate\Http\Request;

class EgitimNavbarController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			return view('admin.egitim.navbar.create')->with('navbars', EgitimNavbar::all());
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
				'icerik' => 'required',
				'ismenu' => 'required',
        'admin' => 'required'
			]);

			EgitimNavbar::create($formFields);

			return redirect('/admin/egitim/egitim_navbars');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EgitimNavbar $egitim_navbar)
    {
      return view('admin.egitim.navbar.edit', [
        'navbar' => $egitim_navbar,
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
    public function update(Request $request, EgitimNavbar $egitim_navbar)
    {
      $formFields = $request->validate([
				'ad' => 'required',
        'icon' => 'required',
        'link' => 'required',
				'icerik' => 'required',
				'ismenu' => 'required',
        'admin' => 'required'
			]);

      $egitim_navbar->update($formFields);

      return redirect('/admin/egitim/egitim_navbars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EgitimNavbar $egitim_navbar)
    {
      $egitim_navbar->delete();
      return redirect('/admin/egitim/egitim_navbars');
    }

		/**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.egitim.navbar.index', [
				'navbars2' => EgitimNavbar::latest()->paginate(12),
        'navbars' => EgitimNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(EgitimNavbar $egitim_navbar)
    {
			return view('admin.egitim.navbar.show', [
        'navbar' =>  $egitim_navbar,
        'navbars' => EgitimNavbar::all()
      ]);
    }
}
