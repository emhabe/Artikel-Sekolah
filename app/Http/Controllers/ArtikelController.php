<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Kategori;

class ArtikelController extends Controller
{
   public function index(Request $request)
   {
      $user = auth()->user();
      if ($request->has('search')) {
         $kategori = Kategori::all();
         $artikel = Artikel::where('status', '=', 1)->where('judul', 'LIKE', '%' . $request->search . '%')->with('kategori')->latest('created_at')->paginate(8);
         $artikelfoto = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(9);
         $artikel2 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(5);
         $artikelbesar = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->first();
         $artikelkecil1 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(1)->take(1)->first();
         $artikelkecil2 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(2)->take(1)->first();
      } else {
         $kategori = Kategori::all();
         $artikel = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(8);
         $artikelfoto = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(9);
         $artikel2 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(5);
         $artikelbesar = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->first();
         $artikelkecil1 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(1)->take(1)->first();
         $artikelkecil2 = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->skip(2)->take(1)->first();
      }

      return view('halaman.index', compact('kategori', 'artikel','artikelfoto', 'artikel2', 'artikelbesar', 'artikelkecil1', 'artikelkecil2', 'user'));
   }
   public function detail_berita(Request $request, $id)
   {
      $user = auth()->user();
      $data = Artikel::findOrFail($id);
      if ($request->has('search')) {
         $kategori = Kategori::all();
         $artikelfoto = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(9);
         $artikel2 = Artikel::with('kategori')->where('status', '=', '1')->paginate(5);
         $artikel = Artikel::with('kategori')->where('judul', 'LIKE', '%' . $request->search . '%')->where('status', '=', '1')->latest('created_at')->paginate(8);
      } else {
         $kategori = Kategori::all();
         $artikel2 = Artikel::with('kategori')->where('status', '=', '1')->paginate(5);
         $artikelfoto = Artikel::where('status', '=', 1)->with('kategori')->latest('created_at')->paginate(9);
         $artikel = Artikel::with('kategori')->where('status', '=', '1')->latest('created_at')->paginate(8);
      }
      return view('halaman.detail_berita', compact('data', 'artikel','artikelfoto', 'artikel2', 'kategori', 'user'));
   }
   public function kategori_berita(Request $request, $id)
   {
      $user = auth()->user();
      if ($request->has('search')) {
         $kategori = Kategori::all();
         $namakategori = Kategori::where('id', '=', $id)->first();
         $artikel = Artikel::with('kategori')->where('judul', 'LIKE', '%' . $request->search . '%')->where('status', '=', 1)->where('kategori_id', '=', $id)->latest('created_at')->paginate(8);
      } else {
         $kategori = Kategori::all();
         $namakategori = Kategori::where('id', '=', $id)->first();
         $artikel = Artikel::with('kategori')->where('status', '=', 1)->where('kategori_id', '=', $id)->latest('created_at')->paginate(8);
      }
      return view('halaman.kategori_berita', compact('artikel', 'kategori', 'namakategori', 'user'));
   }
   public function test()
   {
      return view('demo-1.test');
   }
   public function lisensi_tim(Request $request)
   {
      $user = auth()->user();
      if ($request->has('search')) {
         $kategori = Kategori::all();
         $artikel2 = Artikel::with('kategori')->where('status', '=', '1')->paginate(5);
         $artikel = Artikel::with('kategori')->where('judul', 'LIKE', '%' . $request->search . '%')->where('status', '=', '1')->latest('created_at')->paginate(8);
      } else {
         $kategori = Kategori::all();
         $artikel2 = Artikel::with('kategori')->where('status', '=', '1')->paginate(5);
         $artikel = Artikel::with('kategori')->where('status', '=', '1')->latest('created_at')->paginate(8);
      }
      return view('halaman.lisensi_tim', compact('artikel', 'artikel2', 'kategori', 'user'));
   }

}
