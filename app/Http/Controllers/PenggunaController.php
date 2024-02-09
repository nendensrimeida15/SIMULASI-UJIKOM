<?php
////////////////////////////////////////////////////////////////
/////////////////// CREATED BY SANDY RIFALDI ///////////////////
////////////////////////////////////////////////////////////////
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class PenggunaController extends Controller
{
    public function login()
    {
        return view('Login.index');
    }

    public function index()
    {
        $data = User::orderBy('id', 'desc')->paginate(5);
        return view('Pengguna.index')->with('data', $data);
    }

    public function create()
    {
        return view('Pengguna.create');
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
        'nama.required' => 'Nama wajib diisi',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Email yang dimasukkan tidak valid',
        'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'Minumum password 8 karakter',
        'nama_lengkap' => 'Nama Lengkap wajib diisi',
        'alamat' => 'Alamat wajib diisi',
        'role' => 'Role wajib diisi'
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
    return redirect('data-pengguna')->with('success', 'Berhasil memasukan pengguna');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = User::where('id', $id)->first();
        return view('Pengguna.edit')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'role' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email yang dimasukkan tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minumum password 8 karakter',
            'nama_lengkap' => 'Nama Lengkap wajib diisi',
            'alamat' => 'Alamat wajib diisi',
            'role' => 'Role wajib diisi'
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nama_lengkap' => $request->nama_lengkap,
            'alamat' => $request->alamat,
            'role' => $request->role
        ];

        User::where('id', $id)->update($data);
        return redirect('data-pengguna')->with('success', 'Berhasil melakukan update pengguna');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('data-pengguna')->with('success', 'Berhasil melakukan hapus pengguna');
    }
}
