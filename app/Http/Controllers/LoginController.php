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
        }
    }

    public function post_register(Request $request)
    {
        $data =  User::create([
            'name' => 'Guest' . mt_rand(1000, 9999),
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
    }
}
