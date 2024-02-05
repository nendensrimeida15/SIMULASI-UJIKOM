<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view("sesi/index");
    }
    public function login(Request $request)
    {
       
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
         $infologin = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required'=> 'Email wajib Diisi',
            'password.required'=> 'Password Wajib Diisi',
        ]);

     

        if(Auth::attempt($infologin)){
            //jika otentikasi berhasil
            return redirect()->route('data-pengguna')->with('succes', 'berhasil login');
        } else {
            //jika otentikasi gagal
            return redirect('sesi')->withErrors('username dan password yang dimasukan tidak valid');
        }
    }

    function logout(){
            Auth::logout();
            return redirect('sesi')->with('success', 'berhasil logout');
    
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
