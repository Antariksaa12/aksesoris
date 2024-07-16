<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelians';
    protected $fillable = [
        'jumlah',
        'tanggal',
        'produk',
    ];

    public function produk()
    {
        return $this->belongsTo(produk::class, 'produk');
    }
}
