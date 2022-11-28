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
        return view('demo-1.artikel');
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
        ])->id;

        $images = array();
        if ($files = $request->file('foto')) {
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('foto_artikel', $name);
                $images[] = $name;
            }
        }
        /*Insert your data*/

        Foto::insert([
            'foto' =>  implode("|", $images),
            'artikel_id' => $data,
        ]);
        return redirect('artikel');
    }
}
