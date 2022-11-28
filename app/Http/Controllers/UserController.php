<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Foto;

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
    public function artikel()
    {
        $data = Artikel::all();
        return view('demo-1.artikel', compact('data'));
    }
    public function kategori()
    {
        return view('demo-1.kategori');
    }
    public function user()
    {
        return view('demo-1.user');
    }
    public function buat_artikel()
    {
        return view('demo-1.buat_artikel');
    }
    public function submit_artikel(Request $request)
    {
        $data = Artikel::create([
            'judul' => $request->judul,
            'detail_singkat' => $request->detail_singkat,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->foto,
        ]);
        if ($request->hasfile('foto')) {
            $request->file('foto')->move(public_path('foto_artikel/'), '' . date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension());
            $data->foto = '' . date('YmdHis') . '.' . $request->file('foto')->getClientOriginalExtension();
            $data->save();
        }
        return redirect('artikel');
    }
}
