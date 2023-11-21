<?php

use App\Http\Controllers\Supplier;
use App\Http\Controllers\Barang;
use Illuminate\Support\Facades\Route;

Route::get('/', [Supplier::class, 'index']);
Route::get('/tambahSupplier', [Supplier::class, 'tambahSupplier']);
Route::post('/save', [Supplier::class, 'save']);
Route::delete('/hapus/{id}', [Supplier::class, 'destroy']);
Route::put('/edit/{id}', [Supplier::class, 'edit']);
Route::get('/update/{id}', [Supplier::class, 'update']);
Route::get('/barang', [Barang::class, 'index']);
Route::post('/barang/save', [Barang::class, 'save']);


Route::get('/about', function () {
    return view('about');
});
