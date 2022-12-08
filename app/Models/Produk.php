<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['id','jenis','nama','ukuran','stok','harga','gambar'];
}
