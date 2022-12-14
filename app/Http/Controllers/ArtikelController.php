<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
   public function index()
   {

      return view('halaman.index');
   }
   public function detail_berita($id)
   {
      $data = Artikel::findOrFail($id);
      return view('halaman.detail_berita', compact('data'));
   }
   public function test()
   {
      return view('demo-1.test');
   }
}
