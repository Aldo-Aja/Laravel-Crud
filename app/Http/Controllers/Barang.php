<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModels; 

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

    public function save(Request $request)
    {
        BarangModels::create($request->except(['_token', 'simpan']));
        return redirect()->to(url('barang'))->with('dataTambah', 'Data Berhasil Di Tambah');
    }

    public function edit($id, Request $request)
    {
        $barang = BarangModels::find($id);
        $barang->update($request->except(['_token', 'simpan']));
        return redirect()->to(url('/barang'));
    }

    public function destroy($id)
    {
        $barang = BarangModels::find($id);
        
        if (!$barang) {
            return redirect()->to(url('/barang'))->with('error', 'Data not found');
        }

        $barang->delete();
        return redirect()->to(url('/barang'))->with('dataHapus', 'Data Berhasil Dihapus');
    }

    public function update($id)
    {
        $barang = BarangModels::find($id);

        if (!$barang) {
        return redirect()->to(url('/barang'))->with('error', 'Data not found');
        }

        $data = [
        'title' => 'Edit Barang | MyApp',
        'active' => 'Barang',
        'barang' => $barang,
        ];

        return view('barang.edit', $data);
    }
}
