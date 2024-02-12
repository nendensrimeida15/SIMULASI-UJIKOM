<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistarController extends Controller
{
    function index()
    {
        return view('Registar.index');
    }
    function create(Request $request)
    {
       
    }


    public function store(Request $request)
    {
        Session::flash('username', $request->input('username'));
        Session::flash('email', $request->input('email'));
    
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email yang dimasukkan tidak valid',
            'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minumum password 8 karakter'
        ]);
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($infologin)) {
            return redirect('siswa')->with('success', 'Berhasil login');
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
