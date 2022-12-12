<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index($id) {
        $data = Produk::where('id',$id)->first();
        return view('cart', compact('data'));
    
    }
}
