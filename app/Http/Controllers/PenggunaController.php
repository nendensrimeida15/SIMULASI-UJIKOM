<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        return '<h1>Saya Pengguna dari controller</h1>';
    }

    public function detail($id)
    {
        return '<h1>Saya Pengguna dari controller dengan Id $id</h1>';
    }
    // public function store(Request $request)
    // {
    //     //
    // }

//     public function show($id)
//     {
//         //
//     }

//     public function edit($id)
//     {
//         //
//     }

//     public function update(Request $request, $id)
//     {
//         //
//     }

//     public function destroy($id)
//     {
//         //
//     }
}
