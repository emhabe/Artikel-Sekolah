<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'role' => 'admin', 'password' => $request->password])) {
            return redirect('dashboard');
        }
    }

    public function register(Request $request)
    {
        $data =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'guest',
            'remember_token' => Str::random(60),
        ]);
        return redirect('login');
    }
}
