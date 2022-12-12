<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $data = Produk::all();
        return view('produk', compact('data'));
    }
    public function create() {
        return view('create');
    }
    public function store(Request $request) {
        $data = Produk::create($request->all());
        if($request->hasFile('gambar')) {
            $request->file('gambar')->move('gambar/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('produk.index',compact('data'))->with(['success' => 'Data Berhasil Disimpan!']); 
    }
    public function edit(Produk $produk, Request $request) {
        return view('edit', compact('produk'));
    }
    public function update(Request $request, $id) {
        $data = Produk::find($id);
        $data->update($request->all());
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diubah!']);

    }
    public function destroy(Produk $produk) {
        $produk->delete();
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
