<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Produk;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PurchaseController extends Controller
{
    public function store(Request $request)
    {
        $sessionId = Session::getId();
        $cartItems = json_decode($request->input('cartItems'), true);
        $shippingInfoId = $request->input('shippingInfoId');

        try {
            foreach ($cartItems as $item) {
                $product = Produk::find($item['produk_id']);
                if (!$product) {
                    throw new \Exception('Product not found: ' . $item['produk_id']);
                }

                // Create a purchase record
                Purchase::create([
                    'shipping_info_id' => $shippingInfoId,
                    'product_id' => $product->id,
                    'quantity' => $item['qty']
                ]);

                // Decrement the product stock
                $product->decrementStock($item['qty']);
            }

            // Delete cart items after successful purchase
            DB::table('cart')->where('session_id', $sessionId)->delete();

        } catch (\Exception $e) {
            Log::error('Error in PurchaseController@store: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error processing your request: ' . $e->getMessage());
        }

        // Redirect or show success message
        return view('thankyou')->with('success', 'Purchase completed successfully.');
    }
}
