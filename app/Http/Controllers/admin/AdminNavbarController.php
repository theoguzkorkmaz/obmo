<?php

namespace App\Http\Controllers\admin;

use App\Models\LogKayit;
use App\Models\AdminNavbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminNavbarController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.navbar.create')
          ->with('navbars', AdminNavbar::all());
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
        'icon' => '', 
        'link' => 'required',
        'icerik' => '',
        'ismenu' => 'required',
        'admin' => 'required'
      ]);

      AdminNavbar::create($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $request->ad." eklendi."
      ]);

      return redirect('/admin/admin/admin_navbars')
        ->with('success', 'Admin navbar başarı ile oluşturulmuştur!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminNavbar $admin_navbar)
    {
      return view('admin.admin.navbar.edit', [
        'navbar' => $admin_navbar,
        'navbars' => AdminNavbar::all()
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminNavbar $admin_navbar)
    {
      $formFields = $request->validate([
				'ad' => '',
        'icon' => '',
        'link' => '',
				'icerik' => '',
				'ismenu' => '',
        'admin' => 'required'
			]);

      $admin_navbar->update($formFields);

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $admin_navbar->ad." güncellendi."
      ]);

      return redirect('/admin/admin/admin_navbars')
        ->with('success', 'Admin navbar başarı ile güncellenmiştir!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminNavbar $admin_navbar)
    {
      $admin_navbar->delete();

      LogKayit::create([
        'user_id' => auth()->user()->id,        
        'icerik' => $admin_navbar->ad." silindi."
      ]);

      return redirect('/admin/admin/admin_navbars')
        ->with('success', 'Admin navbar başarı ile silinmiştir!');
    }

    /**
     * Display a listing of the resource for admin side.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {			
			return view('admin.admin.navbar.index', [
				'navbars2' => AdminNavbar::latest()->paginate(12),
        'navbars' => AdminNavbar::all()
			]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin_show(AdminNavbar $admin_navbar)
    {
			return view('admin.admin.navbar.show', [
        'navbar' =>  $admin_navbar,
        'navbars' => AdminNavbar::all()
      ]);
    }
}
