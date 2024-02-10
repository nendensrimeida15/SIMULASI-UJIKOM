<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasanbuku;

class UlasanBukuController extends Controller
{
    public function index()
    {
        $data = UlasanBuku::with('user', 'buku')->orderBy('id', 'desc')->paginate(5);
        return view('UlasanBuku.index')->with('data', $data);
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
