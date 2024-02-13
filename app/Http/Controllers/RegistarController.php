<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Models
use App\Models\User;

class RegistarController extends Controller
{
    function index()
    { 
        return view('Registar.index');
    }
    
    function create(Request $request)
    {
        //
    }


    public function store(Request $request)
    {
        Session::flash('username', $request->input('username'));
        Session::flash('email', $request->input('email'));
        Session::flash('password', $request->input('password'));
        Session::flash('nama_lengkap', $request->input('nama_lengkap'));
        Session::flash('alamat', $request->input('alamat'));
        Session::flash('role', $request->input('role'));

    $request->validate([
        'username' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
        'nama_lengkap' => 'required',
        'alamat' => 'required',
        'role' => 'required'
    ], [
        'nama.required' => 'Nama Wajib Diisi',
        'email.required' => 'Email Wajib Diisi',
        'email.email' => 'Email Yang Dimasukkan Tidak Valid',
        'email.unique' => 'Email Sudah Digunakan, Silakan Masukkan Email Yang Lain',
        'password.required' => 'Password Wajib Diisi',
        'password.min' => 'Minumum Password 8 Karakter',
        'nama_lengkap' => 'Nama Lengkap Wajib Diisi',
        'alamat' => 'Alamat Wajib Diisi',
        'role' => 'Role Wajib Diisi'
    ]);

    $data = [
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'nama_lengkap' => $request->nama_lengkap,
        'alamat' => $request->alamat,
        'role' => $request->role
    ];

        User::create($data);
        return redirect('login');
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
