<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
   public function index(){
    
    return view('halaman.index');
   }
   public function detail_berita(){
    
    return view('halaman.detail_berita');
   }
}
