<?php
////////////////////////////////////////////////////////////////
/////////////////// CREATED BY SANDY RIFALDI ///////////////////
////////////////////////////////////////////////////////////////
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Models
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
<<<<<<< HEAD
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
=======
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
    return redirect('data-pengguna')->with('success', 'Berhasil memasukan pengguna');

>>>>>>> 7dcc9b9c646c5a679e692c7a284e5991f979ac36

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

        User::where('id', $id)->update($data);
        return redirect('data-pengguna')->with('success', 'Berhasil melakukan update pengguna');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('data-pengguna')->with('success', 'Berhasil melakukan hapus pengguna');
    }
}
