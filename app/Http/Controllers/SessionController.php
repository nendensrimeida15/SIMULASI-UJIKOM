<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view("sesi/index");
    }
    public function login()
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=> 'Email Wajib Diisi',
            'password.required'=> 'Password wajib diisi',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' =>$required->password
        ];

        if(Auth::attempt($infologin)){
            //kalau otentikasi sukses
            return redirect('Data-Pengguna')->with('success', 'berhasil Login');
        } else {
            //kalau otentikasi gagal
            return redirect('sesi')->wihtErrors('username dan password yang dimasukan tidak Valid');
        }
    }

    function register()
    {
        return view('sesi/register');

    }
    public function create(request $request)
    {
        return 12345678;
    }
}