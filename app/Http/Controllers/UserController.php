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
        $artikel = Artikel::where('status', '=', 0)->with('kategori')->latest('created_at')->get();
        return view('demo-1.dashboard', compact('kategori', 'artikel'));
    }

    public function artikel(Request $request)
    {
        if ($request->has('search')) {
            $data = Artikel::where('status', '=', 1)->where('judul', 'LIKE', '%' . $request->search . '%');
        }
        $data = Artikel::all();
        $kategori = Kategori::all();
        return view('demo-1.artikel', compact('data', 'kategori'));
    }
    public function kategori($id)
    {
        $kategori = Kategori::all();
        $data = Artikel::where('kategori_id', '=', $id)->get();
        return view('demo-1.kategori', compact('data', 'kategori'));
    }
    public function user()
    {
        $kategori = Kategori::all();
        return view('demo-1.user', compact('kategori'));
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
        return redirect('artikel')->with('success', 'Data Berhasil Dimasukkan');;
    }
    public function edit($id)
    {
        $data = Artikel::FindOrFail($id);
        $kategori = Kategori::all();
        return view('demo-1.edit', compact('data', 'kategori'));
    }
    public function update($id, Request $request)
    {
        $data = Artikel::FindOrFail($id);
        $data->update([
            'judul' => $request->judul,
            'detail_singkat' => $request->detail_singkat,
            'deskripsi' => $request->deskripsi,
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
        $file = public_path('/foto_artikel/') . $data->foto;
        if (file_exists($file)) {
            @unlink($file);
        }
        $data->delete();
        return redirect('artikel');
    }
    public function lihat_artikel($id)
    {
        $kategori = Kategori::all();
        $data = Artikel::findOrFail($id);
        return view('demo-1.lihat_artikel', compact('data', 'kategori'));
    }

    public function publish(Request $request)
    {
        $data = Artikel::findOrFail($request->id);
        $data->update([
            'status' => 1,
        ]);
        return redirect('artikel');
    }
}
