<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TampilController;
use App\Models\kategori;
use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $produk = Produk::all();
    return view('user', compact('produk'));
});

Route::get('/tampil/{id}', [TampilController::class, 'tampilkan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function () {
    $produk = Produk::all();
    $kategori = Kategori::all();
    $supplier = Supplier::all();
    return view('home', compact('produk', 'kategori', 'supplier'));
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('produk', ProdukController::class);
});
