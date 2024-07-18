<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'produk_id', 'session_id', 'qty'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
