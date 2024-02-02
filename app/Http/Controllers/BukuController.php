<?php

namespace App\Http\Controllers;
use App\Models\Buku;

use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function index()
    {
        $data = Buku::paginate(5);
        return view('Buku.index')->with('data', $data);
    }

    public function create()
    {
        return view('Buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required|min:3',
            'Penulis' => 'required|min:3',
            'Penerbit' => 'required|min:3',
            'TahunTerbit' => 'required|min:3|numeric',
        ]);

        $data = [
            'Judul' => $request->input('Judul'),
            'Penulis' => $request->input('Penulis'),
            'Penerbit' => $request->input('Penerbit'),
            'TahunTerbit' => $request->input('TahunTerbit'),
        ];

        Buku::create($data);
        return redirect('data-buku');
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
