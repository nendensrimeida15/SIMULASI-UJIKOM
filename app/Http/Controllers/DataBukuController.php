<?php
////////////////////////////////////////////////////////////////
/////////////////// CREATED BY SANDY RIFALDI ///////////////////
////////////////////////////////////////////////////////////////
namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataBukuController extends Controller
{

    public function index()
    {
        $data = Buku::orderBy('id', 'desc')->paginate(5);
        return view('Buku.index')->with('data', $data);
    }

    public function create()
    {
        return view('Buku.create');
    }

    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('penulis', $request->penulis);
        Session::flash('penerbit', $request->penerbit);
        Session::flash('tahun_terbit', $request->tahun_terbit);

        $request->validate([
            'judul' => 'required|min:3',
            'penulis' => 'required|min:3',
            'penerbit' => 'required|min:3',
            'tahun_terbit' => 'required|min:3|numeric',
        ], [
            'judul.required' => 'Judul wajib diisi',
            'penulis.required' => 'Penulis wajib diisi',
            'penerbit.required' => 'Penerbit wajib diisi',
            'tahun_terbit.required' => 'Tahun terbit wajib diisi',
            'tahun_terbit.numeric' => 'Tahun terbit wajib diisi dalam angka',
        ]);

        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahun_terbit' => $request->input('tahun_terbit'),
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
            'judul' => 'required|min:3',
            'penulis' => 'required|min:3',
            'Penerbit' => 'required|min:3',
            'tahun_terbit' => 'required|min:3|numeric',
        ], [
            'judul.required' => 'Judul wajib diisi',
            'penulis.required' => 'Penulis wajib diisi',
            'Penerbit.required' => 'Penerbit wajib diisi',
            'tahun_terbit.required' => 'Tahun terbit wajib diisi',
            'tahun_terbit.numeric' => 'Tahun terbit wajib diisi dalam angka',
        ]);

        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'Penerbit' => $request->input('Penerbit'),
            'tahun_terbit' => $request->input('tahun_terbit'),
        ];

        Buku::where('id', $id)->update($data);
        return redirect('data-buku')->with('success', 'Berhasil melakukan update data');
    }

    public function destroy($id)
    {
        Buku::where('id', $id)->delete();
        return redirect('data-buku')->with('success', 'Berhasil melakukan hapus data');
    }
}
