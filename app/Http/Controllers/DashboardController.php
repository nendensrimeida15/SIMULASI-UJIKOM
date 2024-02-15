<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_buku = Buku::count();
        $total_peminjaman = Peminjaman::count();
        $total_user = User::count();

        return view('Dashboard.index')->with('total_buku', $total_buku)
        ->with('total_peminjaman', $total_peminjaman)
        ->with('total_user', $total_user);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
