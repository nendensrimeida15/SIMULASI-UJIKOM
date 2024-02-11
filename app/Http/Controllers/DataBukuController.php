<?php
////////////////////////////////////////////////////////////////
/////////////////// CREATED BY SANDY RIFALDI ///////////////////
////////////////////////////////////////////////////////////////
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Models
use App\Models\Buku;

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
            'judul' => 'required|min:1|max:20',
            'penulis' => 'required|min:1|max:20',
            'penerbit' => 'required|min:1|max:20',
            'tahun_terbit' => 'required|numeric',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'penulis.required' => 'Penulis Wajib Diisi',
            'penerbit.required' => 'Penerbit Wajib Diisi',
            'tahun_terbit.required' => 'Tahun Terbit Wajib Diisi',
            'tahun_terbit.numeric' => 'Tahun Terbit Wajib Diisi Dalam Angka',
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
            'judul' => 'required|min:1|max:20',
            'penulis' => 'required|min:1|max:20',
            'penerbit' => 'required|min:1|max:20',
            'tahun_terbit' => 'required|numeric',
        ], [
            'judul.required' => 'Judul Wajib Diisi',
            'penulis.required' => 'Penulis Wajib Diisi',
            'penerbit.required' => 'Penerbit Wajib Diisi',
            'tahun_terbit.required' => 'Tahun Terbit Wajib Diisi',
            'tahun_terbit.numeric' => 'Tahun Terbit Wajib Diisi Dalam Angka',
        ]);

        $data = [
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
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
