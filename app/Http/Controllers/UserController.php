<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('demo-1.dashboard');
    }
    public function artikel()
    {
        return view('demo-1.artikel');
    }
    public function kategori()
    {
        return view('demo-1.kategori');
    }

}
