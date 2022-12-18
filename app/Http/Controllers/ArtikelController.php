<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;

class ArtikelController extends Controller
{
   public function index(Request $request)
   {
      if ($request->has('search')) {
         $artikel3 = Artikel::where('status', '=', 1)->where('judul', 'LIKE', '%' . $request->search . '%');
      } else {
         $kategori = Kategori::all();
         $artikel = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(8);
         $artikel2 = Artikel::where('status', '=', 1)->with('kategori')->paginate(5);
         $artikelbesar = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->first();
         $artikelkecil1 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(1)->take(1)->first();
         $artikelkecil2 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(2)->take(1)->first();
      }

      $kategori = Kategori::all();
      $artikel = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(8);
      $artikel2 = Artikel::where('status', '=', 1)->with('kategori')->paginate(5);
      $artikelbesar = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->first();
      $artikelkecil1 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(1)->take(1)->first();
      $artikelkecil2 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(2)->take(1)->first();


      return view('halaman.index', compact('kategori', 'artikel', 'artikel2', 'artikelbesar', 'artikelkecil1', 'artikelkecil2'));
   }
   public function detail_berita($id)
   {
      $data = Artikel::findOrFail($id);
      $kategori = Kategori::all();
      $artikel2 = Artikel::with('kategori')->where('status', '=', '1')->paginate(5);
      $artikel = Artikel::with('kategori')->where('status', '=', '1')->latest('created_at')->get();
      return view('halaman.detail_berita', compact('data', 'artikel', 'artikel2', 'kategori'));
   }
   public function kategori_berita($id)
   {
      $kategori = Kategori::all();
      $namakategori = Kategori::where('id', '=', $id)->first();
      $artikel = Artikel::with('kategori')->where('status', '=', 1)->where('kategori_id', '=', $id)->latest('created_at')->get();
      return view('halaman.kategori_berita', compact('artikel', 'kategori', 'namakategori'));
   }
   public function test()
   {
      return view('demo-1.test');
   }
}
