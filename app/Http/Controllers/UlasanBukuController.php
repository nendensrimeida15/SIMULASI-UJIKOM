<?php
////////////////////////////////////////////////////////////////
/////////////////// CREATED BY SANDY RIFALDI ///////////////////
////////////////////////////////////////////////////////////////
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// Models
use App\Models\Ulasanbuku;
use App\Models\User;
use App\Models\Buku;

class UlasanBukuController extends Controller
{
    public function index()
    {
        $data = UlasanBuku::with('user', 'buku')->orderBy('id', 'desc')->paginate(5);
        return view('UlasanBuku.index')->with('data', $data);
    }

    public function create()
    {
        $users = User::where('role', 'peminjam')->get();
        $books = Buku::all();
        return view('UlasanBuku.create')->with('users', $users)->with('books', $books);
    }

    public function store(Request $request)
    {
        Session::flash('user_id', $request->user_id);
        Session::flash('buku_id', $request->buku_id);
        Session::flash('ulasan', $request->ulasan);
        Session::flash('rating', $request->rating);

        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'ulasan' => 'required',
            'rating' => 'required',
        ], [
            'user_id.required' => 'Pengguna Wajib Diisi',
            'buku_id.required' => 'Buku Wajib Diisi',
            'ulasan.required' => 'Ulasan Wajib Diisi',
            'rating.required' => 'Rating Wajib Diisi',
        ]);

        $data = [
            'user_id' => $request->input('user_id'),
            'buku_id' => $request->input('buku_id'),
            'ulasan' => $request->input('ulasan'),
            'rating' => $request->input('rating'),
        ];

        UlasanBuku::create($data);
        return redirect('ulasan-buku')->with('success', 'Berhasil memasukan data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = UlasanBuku::with('user', 'buku')
        ->where('id', $id)->first();
        $users = User::where('role', 'peminjam')->get();
        $books = Buku::all();
        return view('UlasanBuku.edit')->with('data', $data)
        ->with('users', $users)->with('books', $books);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'buku_id' => 'required',
            'ulasan' => 'required',
            'rating' => 'required',
        ], [
            'user_id.required' => 'Pengguna Wajib Diisi',
            'buku_id.required' => 'Buku Wajib Diisi',
            'ulasan.required' => 'Ulasan Wajib Diisi',
            'rating.required' => 'Rating Wajib Diisi',

        ]);

        $data = [
            'user_id' => $request->input('user_id'),
            'buku_id' => $request->input('buku_id'),
            'ulasan' => $request->input('ulasan'),
            'rating' => $request->input('rating'),

        ];

        UlasanBuku::where('id', $id)->update($data);
        return redirect('ulasan-buku')->with('success', 'Berhasil melakukan update data');
    }

    public function destroy($id)
    {
        Ulasanbuku::where('id', $id)->delete();
        return redirect('ulasan-buku')->with('success', 'Berhasil melakukan hapus data');
    }
}
