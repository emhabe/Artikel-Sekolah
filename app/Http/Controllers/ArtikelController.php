<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;

class ArtikelController extends Controller
{
   public function index()
   {
      $kategori = Kategori::all();
      $artikel = Artikel::with('kategori')->latest('created_at')->get();
      $artikel2 = Artikel::with('kategori')->paginate(5);
      $artikelbesar = Artikel::with('kategori')->latest('created_at')->first();
      $artikelkecil1 = Artikel::with('kategori')->latest('created_at')->skip(1)->take(1)->first();
      $artikelkecil2 = Artikel::with('kategori')->latest('created_at')->skip(2)->take(1)->first();
      return view('halaman.index', compact('kategori', 'artikel', 'artikel2', 'artikelbesar', 'artikelkecil1', 'artikelkecil2'));
   }
   public function detail_berita($id)
   {
      $data = Artikel::findOrFail($id);
      $kategori = Kategori::all();

      $artikel = Artikel::with('kategori')->latest('created_at')->get();
      return view('halaman.detail_berita', compact('data', 'artikel', 'kategori'));
   }
   public function kategori_berita($id)
   {
      $data = Artikel::findOrFail($id);
      $kategori = Kategori::all();

      $artikel = Artikel::with('kategori')->latest('created_at')->get();
      return view('halaman.kategori_berita', compact('data', 'artikel', 'kategori'));
   }
   public function test()
   {
      return view('demo-1.test');
   }
}
