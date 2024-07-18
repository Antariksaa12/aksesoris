@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
<main style="background-color: #f8f9fa;">
    <div class="container py-5">
        <h2 class="text-center mb-4" style="font-weight:bold">Your Cart</h2>
        <div class="row">
            @if($cart_items->isEmpty())
                <div class="col-12">
                    <p class="text-center">Your cart is empty!</p>
                </div>
            @else
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart_items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->produk->nama }}</td>
                                <td>Rp. {{ number_format($item->produk->harga, 0, ',', '.') }}</td>
                                <td>
                                    <input type="number" name="qty" value="{{ $item->qty }}" min="1" class="form-control d-inline w-auto update-qty" data-id="{{ $item->id }}" data-price="{{ $item->produk->harga }}">
                                </td>
                                <td class="total-price" id="total-{{ $item->id }}">Rp. {{ number_format($item->produk->harga * $item->qty, 0, ',', '.') }}</td>
                                <td>
                                    <form action="{{ route('cart.delete', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="pricefoot"><strong>Total :</strong></td>
                                <td id="grand-total">Rp. {{ number_format($total, 0, ',', '.') }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4" class="pricefoot"><strong>Discount (30%) :</strong></td>
                                <td id="discount-amount">Rp. {{ number_format($total * 0.3, 0, ',', '.') }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4" class="pricefoot"><strong>Final Total :</strong></td>
                                <td id="final-total">Rp. {{ number_format($total * 0.7, 0, ',', '.') }}</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="text-right">
                        <a href="{{ route('produks.indexProduk') }}" class="btn btn-primary">Product</a>
                        <a href="{{ route('cart.checkout') }}" class="btn btn-success">Checkout</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const qtyInputs = document.querySelectorAll('.update-qty');
    const grandTotalElement = document.getElementById('grand-total');
    const discountAmountElement = document.getElementById('discount-amount');
    const finalTotalElement = document.getElementById('final-total');
    const discountRate = 0.3; // 30%

    function calculateTotals() {
        let grandTotal = 0;
        const totalPriceElements = document.querySelectorAll('.total-price');

        totalPriceElements.forEach(element => {
            const total = parseFloat(element.innerText.replace(/[Rp.]/g, '').replace(',', '.'));
            grandTotal += total;
        });

        const discountAmount = grandTotal * discountRate;
        const finalTotal = grandTotal - discountAmount;

        grandTotalElement.innerText = `Rp. ${grandTotal.toLocaleString('id-ID')}`;
        discountAmountElement.innerText = `Rp. ${discountAmount.toLocaleString('id-ID')}`;
        finalTotalElement.innerText = `Rp. ${finalTotal.toLocaleString('id-ID')}`;
    }

    qtyInputs.forEach(input => {
        input.addEventListener('change', function() {
            const id = this.dataset.id;
            const price = parseFloat(this.dataset.price);
            const qty = parseInt(this.value);
            const totalPriceElement = document.getElementById(`total-${id}`);
            const totalPrice = price * qty;
            totalPriceElement.innerText = `Rp. ${totalPrice.toLocaleString('id-ID')}`;

            fetch(`{{ url('/cart/update/') }}/${id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ qty: qty })
            }).then(response => response.json())
              .then(data => {
                  if (!data.success) {
                      alert('Failed to update cart');
                  }
              }).catch(error => {
                  console.error('Error:', error);
              });

            calculateTotals();
        });
    });

    calculateTotals(); // Initial calculation on page load
});
</script>

@endsection
