<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Foto;
use App\Models\Kategori;

class UserController extends Controller
{
    public function dashboard()
    {
        $kategori = Kategori::all();
        return view('demo-1.dashboard', compact('kategori'));
    }
   
    public function artikel()
    {
        $data = Artikel::all();
        return view('demo-1.artikel', compact('data'));
    }
    public function kategori($id)
    {
        $data = Artikel::where('kategori_id', '=', $id)->get();
        return view('demo-1.kategori', compact('data'));
    }
    public function user()
    {
        return view('demo-1.user');
    }
    public function buat_artikel()
    {
        $kategori = Kategori::all();
        return view('demo-1.buat_artikel', compact('kategori'));
    }
    public function submit_artikel(Request $request)
    {
        $data = Artikel::create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori,
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
    public function edit($id)
    {
        $data = Artikel::FindOrFail($id);
        return view('demo-1.edit', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Artikel::FindOrFail($id);
        $data->update([
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
    public function delete($id)
    {
        $data = Artikel::FindOrFail($id);
        $data->delete();
        return redirect('artikel');
    }
    public function lihat_artikel()
    {
        return view('demo-1.lihat_artikel');
    }
}
