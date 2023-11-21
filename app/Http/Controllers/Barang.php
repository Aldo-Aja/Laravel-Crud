<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModels; // Make sure to include the correct namespace

class Barang extends Controller
{
    public function index()
    {
        $barang = BarangModels::all();
        $data = [
            'title' => 'Barang | MyApp',
            'active' => 'Barang',
            'barang' => $barang,
        ];
        return view('barang.index', $data);
    }

    public function save(Request $request){
        BarangModels::create($request->except(['_token', 'simpan']));
        return redirect()->to(url('barang'))->with('dataTambah', 'Data Berhasil Di Tambah');
    }
}
