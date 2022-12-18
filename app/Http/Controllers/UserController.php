<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Foto;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Komentar;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $terkirim = Artikel::where('status', '=', 1)->count();
        $belum = Artikel::where('status', '=', 0)->count();
        $pengguna = User::where('role', '=', 'guest')->count();
        $user = auth()->user();
        if ($request->has('search')) {
        $kategori = Kategori::all();
        $artikel = Artikel::where('status', '=', 0)->where('judul', 'LIKE', '%' . $request->search . '%')->with('kategori')->latest('created_at')->paginate(6);
        }else{
            $kategori = Kategori::all();
        $artikel = Artikel::where('status', '=', 0)->with('kategori')->latest('created_at')->paginate(6); 
        }

        return view('demo-1.dashboard', compact('kategori', 'artikel', 'user', 'terkirim', 'belum', 'pengguna'));
    }

    public function artikel(Request $request)
    {
        $user = auth()->user();
        if ($request->has('search')) {
            $data = Artikel::where('judul', 'LIKE', '%' . $request->search . '%')->paginate(6);
            $kategori = Kategori::all();
        } else {
            $data = Artikel::all();
            $kategori = Kategori::all();
        }
        return view('demo-1.artikel', compact('data', 'kategori','user'));
    }
    public function kategori(Request $request,$id)
    {
        $user = auth()->user();
        $kategori2 = Kategori::all();
        $kategori = Kategori::findorFail($id);
        if($request->has('search')){
            $data = Artikel::where('kategori_id', '=', $id)->where('judul', 'LIKE', '%' . $request->search . '%')->get();

        }else{
            $data = Artikel::where('kategori_id', '=', $id)->get();

        }
        return view('demo-1.kategori', compact('data', 'kategori', 'kategori2','user'));
    }
    public function user()
    {
        $user = auth()->user();
        $kategori = Kategori::all();
        $komentar = Komentar::with('user')->get();
        return view('demo-1.user', compact('kategori', 'komentar','user'));
    }
    public function buat_artikel()
    {
        $user = auth()->user();
        $kategori = Kategori::all();
        return view('demo-1.buat_artikel', compact('kategori','user'));
    }
    public function submit_artikel(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:7',
            'detail_singkat' => 'required|min:10',
            'deskripsi' => 'required|min:10',
            'foto' => 'required',
        ]);

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
        return redirect('artikel')->with('success', 'Data Berhasil Dimasukkan');
    }
    public function edit($id)
    {
        $user = auth()->user();
        $data = Artikel::FindOrFail($id);
        $kategori = Kategori::all();
        return view('demo-1.edit', compact('data', 'kategori','user'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:7',
            'detail_singkat' => 'required|min:10',
            'deskripsi' => 'required|min:10',
        ]);

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
        $user = auth()->user();
        $kategori = Kategori::all();
        $data = Artikel::findOrFail($id);
        return view('demo-1.lihat_artikel', compact('data', 'kategori','user'));
    }

    public function publish(Request $request)
    {
        $data = Artikel::findOrFail($request->id);
        $data->update([
            'status' => 1,
        ]);
        return redirect('artikel');
    }
    public function komen(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:100',
        ]);

        if (Auth::check()) {
            $data = Komentar::create([
                'nama' => $request->nama,
                'user_id' => Auth::user()->id,
            ]);
        } else {
            return redirect('/login');
        }
        return redirect('/');
    }
}
