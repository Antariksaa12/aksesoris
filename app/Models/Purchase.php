<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_info_id',
        'product_id',
        'quantity',
    ];

    /**
     * Get the product associated with the purchase.
     */
    public function product()
    {
        return $this->belongsTo(Produk::class);
    }

    /**
     * Get the shipping information associated with the purchase.
     */
    public function shippingInfo()
    {
        return $this->belongsTo(ShippingInformation::class);
    }
}
        
