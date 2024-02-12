<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index');
    }

    function login(Request $request)
    {
    Session::flash('email', $request->input('email'));

    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8'
    ], [
        'email.required' => 'Email wajib diisi',
        'password.required' => 'Password wajib diisi'
    ]);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];
    if (Auth::attempt($infologin)) {
        return redirect('data-pengguna')->with('success', 'Berhasil login');
    } else {
        return redirect('login')->withErrors('username dan password yang dimasukkan tidak sesuai');
    }

    }
    
    public function logout()
    {
    Auth::logout();
    return redirect('login')->with('success', 'Berhasil logout');
    }
}
