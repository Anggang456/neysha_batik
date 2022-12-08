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
    if ($request->hasFile('gambar')) {
        $path = $request->file('gambar')->store('images');
    
        $data = Produk::create([
            'jenis' => $request->jenis,
            'nama' => $request->nama,
            'ukuran' => $request->ukuran,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $request->$path
        ]);
        return redirect()->route('produk.index',compact('data'))->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            $path = '';
        }    
    }
    public function edit(Produk $produk) {
        return view('edit', compact('produk'));
    }
    public function update(Request $request, Produk $produk) {
        $produk->update([
        'jenis' => $request->jenis,
        'nama' => $request->nama,
        'ukuran' => $request->ukuran,
        'stok' => $request->stok,
        'harga' => $request->harga,
        'gambar' => $request->gambar
        ]);
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diubah!']);

    }
    public function destroy(Produk $produk) {
        $produk->delete();
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
