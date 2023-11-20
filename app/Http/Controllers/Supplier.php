<?php

namespace App\Http\Controllers;

use App\Models\Supplier as ModelSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Supplier extends Controller
{
    public function index(){
        $supplier = ModelSupplier::all();
        $data = [
            'supplier' => $supplier
        ];
        return view('supplier', $data);
    }

    public function tambahSupplier()
    {
        return view('tambahSupplier');
    }

    public function save(Request $request)
    {
        DB::table('supplier')->insert([
            'namaSupplier' => $request->namaSupplier,
            'alamatSupplier' => $request->alamatSupplier,
            'telpSupplier' => $request->telpSupplier,
        ]);
        return redirect()->to(url('/'));
    }

    public function destroy($id)
    {
        $supplier = ModelSupplier::find($id);
        $supplier->delete();
        return redirect()->to(url('/'));
    }

    public function edit($id, Request $request)
    {
        $supplier = ModelSupplier::find($id);
        $supplier->update($request->except(['_token', 'simpan']));
        return redirect()->to(url('/'));
    }

    public function update($id)
    {
    $supplier = ModelSupplier::find($id);
    return view('editSupplier', compact('supplier', 'id'));
    }

}
