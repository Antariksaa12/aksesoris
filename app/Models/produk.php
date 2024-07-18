<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks'; // Ensure the correct table name

    protected $fillable = [
        'nama',
        'harga',
        'stock',
        // Add other necessary fields
    ];

    /**
     * Decrement the stock of the product.
     */
    public function decrementStock($quantity)
    {
        $this->stock -= $quantity;
        $this->save();
    }
}
