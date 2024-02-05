<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        Session::flash('Judul', $request->Judul);
        Session::flash('Penulis', $request->Penulis);
        Session::flash('Penerbit', $request->Penerbit);
        Session::flash('TahunTerbit', $request->TahunTerbit);

        $request->validate([
            'Judul' => 'required|min:3',
            'Penulis' => 'required|min:3',
            'Penerbit' => 'required|min:3',
            'TahunTerbit' => 'required|min:3|numeric',
        ], [
            'Judul.required' => 'Judul wajib diisi',
            'Penulis.required' => 'Penulis wajib diisi',
            'Penerbit.required' => 'Penerbit wajib diisi',
            'TahunTerbit.required' => 'Tahun terbit wajib diisi',
            'TahunTerbit.numeric' => 'Tahun terbit wajib diisi dalam angka',
        ]);

        $data = [
            'Judul' => $request->input('Judul'),
            'Penulis' => $request->input('Penulis'),
            'Penerbit' => $request->input('Penerbit'),
            'TahunTerbit' => $request->input('TahunTerbit'),
        ];

        Buku::create($data);
        return redirect('data-buku')->with('success', 'Berhasil memasukan data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Buku::where('id', $id)->first();
        return view('Buku.edit')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Judul' => 'required|min:3',
            'Penulis' => 'required|min:3',
            'Penerbit' => 'required|min:3',
            'TahunTerbit' => 'required|min:3|numeric',
        ], [
            'Judul.required' => 'Judul wajib diisi',
            'Penulis.required' => 'Penulis wajib diisi',
            'Penerbit.required' => 'Penerbit wajib diisi',
            'TahunTerbit.required' => 'Tahun terbit wajib diisi',
            'TahunTerbit.numeric' => 'Tahun terbit wajib diisi dalam angka',
        ]);

        $data = [
            'Judul' => $request->input('Judul'),
            'Penulis' => $request->input('Penulis'),
            'Penerbit' => $request->input('Penerbit'),
            'TahunTerbit' => $request->input('TahunTerbit'),
        ];

        Buku::where('id', $id)->update($data);
        return redirect('data-buku')->with('success', 'Berhasil melakukan update data');
    }

    public function destroy($id)
    {
        //
    }
}
