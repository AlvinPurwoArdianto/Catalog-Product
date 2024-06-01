<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class TampilController extends Controller
{
    public function tampilkan($id)
    {
        $produk = Produk::findOrFail($id);
        return view('tampil', compact('produk'));
    }
}
