<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('demo-1.dashboard');
    }
    public function index()
    {
        return view('tampilan.index');
    }
}
