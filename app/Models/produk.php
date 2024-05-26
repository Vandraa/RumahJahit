<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['idProduk','nama_produk', 'image', 'detail', 'harga'];

    protected $table = 'produk';
}