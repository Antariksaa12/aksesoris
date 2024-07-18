<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Produk;
use App\Models\Purchase;
use App\Models\ShippingInformation;
use App\Http\Controllers\Controller; 

class CartController extends Controller
{
    // Add product to cart
    public function addToCart(Request $request)
    {
        $produk_id = $request->input('produk_id');
        $session_id = $request->session()->getId();

        $cart = Cart::where('produk_id', $produk_id)
                    ->where('session_id', $session_id)
                    ->first();

        if ($cart) {
            $cart->qty += 1;
        } else {
            $cart = new Cart();
            $cart->produk_id = $produk_id;
            $cart->session_id = $session_id;
            $cart->qty = 1;
        }

        $cart->save();

        $request->session()->flash('flash_notification', ['message' => 'Product has been added to your cart!']);
        
        return redirect()->back();
    }

    // Menampilkan produk di page /cart
    public function showCart()
    {
        $cart_items = Cart::with('produk')->where('session_id', session()->getId())->get();

        $total = $cart_items->reduce(function ($carry, $item) {
            return $carry + ($item->produk->harga * $item->qty);
        }, 0);

        return view('cart.show', compact('cart_items', 'total'));
    }

    // Edit qty
    public function updateCart(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->qty = $request->input('qty');
        $cart->save();
    
        return response()->json(['success' => true]);
    }

    // Delete
    public function deleteCart($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('cart.show');
    }

    // Notification
    public function count()
    {
        $cart_count = Cart::where('session_id', session()->getId())->count();
        session(['cart_count' => $cart_count]);

        return response()->json(['count' => $cart_count]);
    }

    // Checkout
    public function checkout(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postalcode' => 'required|string|max:10',
            'phone' => 'required|string|max:15',
        ]);

        $sessionId = session()->getId();
        $cartItems = Cart::where('session_id', $sessionId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Create shipping information
        $shippingInfo = ShippingInformation::create([
            'sessions_id' => $sessionId,
            'fullname' => $validatedData['fullname'],
            'address' => $validatedData['address'],
            'postalcode' => $validatedData['postalcode'],
            'phone' => $validatedData['phone'],
        ]);

        $total = $cartItems->sum(function($item) {
            return $item->produk->harga * $item->qty;
        });

        return view('cart.checkout', [
            'shippingInfo' => $shippingInfo,
            'cartItems' => $cartItems,
            'total' => $total,
        ]);
    }

    public function showCheckout()
    {
        $sessionId = session()->getId();
        $cartItems = Cart::where('session_id', $sessionId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Ambil informasi pengiriman terkait dengan session ID saat ini
        $shippingInfo = ShippingInformation::where('sessions_id', $sessionId)->first();

        // Hitung total harga dari item di keranjang
        $total = $cartItems->sum(function($item) {
            return $item->produk->harga * $item->qty;
        });


        return view('cart.checkout', [
            'shippingInfo' => $shippingInfo, // Kirim $shippingInfo ke view
            'cartItems' => $cartItems,
            'total' => $total,
        ]);
    }
}

