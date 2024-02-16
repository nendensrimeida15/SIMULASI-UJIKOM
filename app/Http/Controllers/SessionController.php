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
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        @request->validate([
            'name'=> 'required',
            'email'=> 'required| email|unique:users',
            'password'=> 'required | min:6'
        ], [
            'name.required'=> 'nama wajib diisi',   
            'email.required'=> 'email wajib diisi', 
            'email.email' => 'silahkan masukan email yang valid', 
            'email.unique'=> 'email sudah pernah digunakan,silahkan email yang lain',
            'password.required'=> 'password wajib diisi',  
            'password.min' => 'minimal password yang diizinkan adalah 6 karakter'
        ]);

        $data= [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password   
        ];

        if (Auth::attempt($infologin)) {
            return redirect('data-pengguna')->with('succes', Auth::user()->name. 'Berhasil login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukan tidak valid');
        }
    }
} 