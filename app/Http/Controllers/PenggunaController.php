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
        Session::flash('Username', $request->Username);
        Session::flash('Password', $request->Password);
        Session::flash('Email', $request->Email);
        Session::flash('NamaLengkap', $request->NamaLengkap);
        Session::flash('Alamat', $request->Alamat);

        $request->validate([
            'Username' => 'required|',
            'Password' => 'required|min:8|',
            'Email' => 'required|email|unique:users,email',
            'NamaLengkap' => 'required|',
            'Alamat' => 'required|',
        ], [
            'Username.required' => 'Username wajib diisi',
            'Password.required' => 'Password wajib diisi',
            'Email.required' => 'Email wajib diisi',
            'NamaLengkap.required' => 'Nama lengkap wajib diisi',
            'Alamat.required' => 'Alamat wajib diisi',
        ]);

        $data = [
            'Username' => $request->input('Username'),
            'Password' => $request->input('Password'),
            'Email' => $request->input('Email'),
            'NamaLengkap' => $request->input('NamaLengkap'),
            'Alamat' => $request->input('Alamat'),
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
