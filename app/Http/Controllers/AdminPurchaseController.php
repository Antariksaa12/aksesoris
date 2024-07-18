<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\ShippingInfo; // Pastikan model ini ada

class AdminPurchaseController extends Controller
{
    public function index()
    {
        // Ambil data pembelian dengan informasi yang diperlukan
        $purchases = Purchase::with('product', 'shippingInfo')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.purchases.index', [
            'purchases' => $purchases
        ]);
    }
}
