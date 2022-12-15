<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id) {
        $data = Produk::where('id',$id)->first();
        $item = Produk::paginate('4');
        return view('cart', compact('data','item'));
    }
}
