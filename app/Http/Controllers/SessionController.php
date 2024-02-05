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
       
        Session::flash('Username', $request->Username);
        Session::flash('Email', $request->Email);
        Session::flash('Password', $request->Email);
        
         $infologin = $request->validate([
            'Email' => 'required',
            'Password' => 'required'
        ],[
            'Email.required'=> 'Email wajib Diisi',
            'Password.required'=> 'Password Wajib Diisi',
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
        return view('pengguna/register');
    }
    public function create(request $request)
    {
        return 12345678;
    }
    

}
