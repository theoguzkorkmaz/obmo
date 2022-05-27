<?php

namespace App\Http\Controllers;

use App\Models\EgitimNavbar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_index()
    {           
        return view('admin.index')
            ->with('navbars', EgitimNavbar::all());
    }
}
