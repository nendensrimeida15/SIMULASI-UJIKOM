<?php
////////////////////////////////////////////////////////////////
/////////////////// CREATED BY SANDY RIFALDI ///////////////////
////////////////////////////////////////////////////////////////
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\User;

class PeminjamanController extends Controller
{

    public function index()
    {
        $data = Peminjaman::with('user', 'buku')->orderBy('id', 'desc')->paginate(5);
        return view('Peminjaman.index')->with('data', $data);
    }

    public function create()
    {
        $users = User::where('role', 'peminjam')->get();
        $books = Buku::where('role', 'peminjam')->get();
        return view('Peminjaman.create', compact('users', 'books'));
    }

    public function store(Request $request)
    {
        Session::flash('user_id', $request->user_id);
        Session::flash('buku_id', $request->buku_id);
        Session::flash('tanggal_peminjaman', $request->tanggal_peminjaman);
        Session::flash('tanggal_pengembalian', $request->tanggal_pengembalian);
        Session::flash('status_peminjaman', $request->status_peminjaman);

        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian' => 'required',
            'status_peminjaman' => 'required',
        ], [
            'user_id.required' => 'User ID wajib diisi',
            'buku_id.required' => 'Buku ID wajib diisi',
            'tanggal_peminjaman.required' => 'Tanggal peminjaman wajib diisi',
            'tanggal_pengembalian.required' => 'Tanggal pengembalian wajib diisi',
            'status_peminjaman.required' => 'Status Peminjaman wajib diisi',
        ]);

        $data = [
            'user_id' => $request->input('user_id'),
            'buku_id' => $request->input('buku_id'),
            'tanggal_peminjaman' => $request->input('tanggal_peminjaman'),
            'tanggal_pengembalian' => $request->input('tanggal_pengembalian'),
            'status_peminjaman' => $request->input('status_peminjaman'),
        ];

        Peminjaman::create($data);
        return redirect('peminjaman')->with('success', 'Berhasil memasukan data');
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
