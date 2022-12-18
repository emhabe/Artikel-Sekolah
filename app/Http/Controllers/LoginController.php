<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use Ramsey\Uuid\Type\Integer;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'role' => 'admin', 'password' => $request->password])) {
            return redirect('dashboard');
        } else if (Auth::attempt(['email' => $request->email, 'role' => 'guest', 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email Atau Password Anda Salah']);
        }
    }

    public function post_register(Request $request)
    {
        $data =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'guest',
            'remember_token' => Str::random(50),
        ]);
        return redirect('login');
    }
    public function registrasi()
    {
        return view('demo-1.registrasi');
    }
    public function login()
    {
        return view('demo-1.login_admin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
