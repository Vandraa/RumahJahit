<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    protected $table = 'transactiondetails';
    protected $fillable = [
        'idTransaksi',
        'name',
        'idProduk',
        'image',
        'size',
        'name_produk',
        'jumlah',
        'harga',
        'metode',
        'alamat',
        'notelp',
    ];  

    public function user()
    {
        return $this->belongsTo(User::class, 'name', 'name');
    }

}