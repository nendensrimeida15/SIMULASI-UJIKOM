<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;


class PenggunaController extends Controller
{
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
        Session::flash('username', $request->username);
        Session::flash('password', $request->password);
        Session::flash('email', $request->email);
        Session::flash('nama_lengkap', $request->nama_lengkap);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'username' => 'required|',
            'password' => 'required|min:8|',
            'email' => 'required|email|unique:users,email',
            'nama_lengkap' => 'required|',
            'alamat' => 'required|',
        ], [
            'username.required' => 'username wajib diisi',
            'password.required' => 'password wajib diisi',
            'email.required' => 'email wajib diisi',
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'alamat.required' => 'alamat wajib diisi',
        ]);

        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'alamat' => $request->input('alamat'),
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('data-pengguna')->with('success', 'Berhasil melakukan hapus pengguna');
    }
}
