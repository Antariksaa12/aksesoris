@extends('layouts.app')

@section('title', 'Your Cart')

@section('content')
<main style="background-color: #f8f9fa;">
    <div class="container py-5">
        <a href="{{route('produk')}}" class="btn btn-light pro" >See More Product</a>
        <h2 class="text-center mb-4" style="font-weight:bold; margin-top:-45px;">Your Cart</h2>
        <div class="row" style="margin-top:50px;">
            @if($cart_items->isEmpty())
                <div class="col-12">
                    <p class="text-center">Your cart is empty!</p>
                </div>
            @else
                <div class="col-4">
                    <form action="{{ route('cart.checkout') }}" method="POST" class="identity">
                        @csrf
                        <h5 style="margin-top:10px;">Shipping Information</h5>
                        <div class="form-row">
                            <div class="form-group col-md-11">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" required>
                            </div>
                        </div>
                        <div class="form-group col-md-11" style="margin-top:10px;">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6" style="margin-top:10px;">
                                <label for="postalcode">Postal Code</label>
                                <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="4125.." required>
                            </div>
                            <div class="form-group col-md-6" style="margin-top:10px;">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="0815551..." required>
                            </div>
                        </div>
                        <button type="submit" class="btn chck btn-success" style="margin-top:20px;">Checkout</button>
                    </form>
                </div>
                
                <!-- Cart Items -->
                <div class="col-8">
                    <table class="table table-bordered tbl">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart_items as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="nama">{{ $item->produk->nama }}</td>
                                <td class="price">Rp. {{ number_format($item->produk->harga, 0, ',', '.') }}</td>
                                <td>
                                    <input type="number" name="qty" value="{{ $item->qty }}" min="1" max="{{ $item->produk->stock }}" class="form-control d-inline update-qty" style="width:80px; height:30px;padding-right:0px;" data-id="{{ $item->id }}" data-price="{{ $item->produk->harga }}">
                                </td>
                                <td class="total-price" id="total-{{ $item->id }}">Rp. {{ number_format($item->produk->harga * $item->qty, 0, ',', '.') }}</td>
                                <td class="ect">
                                    <form action="{{ route('cart.delete', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash-o del" style="border:none; color:red;"></button>
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
                        </tfoot>
                    </table>
                </div>
            @endif
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const qtyInputs = document.querySelectorAll('.update-qty');
    const grandTotalElement = document.getElementById('grand-total');

    function calculateTotals() {
        let grandTotal = 0;
        const totalPriceElements = document.querySelectorAll('.total-price');

        totalPriceElements.forEach(element => {
            const total = parseFloat(element.innerText.replace(/[Rp.]/g, '').replace(',', '.'));
            grandTotal += total;
        });

        grandTotalElement.innerText = `Rp. ${grandTotal.toLocaleString('id-ID')}`;
    }

    qtyInputs.forEach(input => {
        input.addEventListener('change', function() {
            const id = this.dataset.id;
            const price = parseFloat(this.dataset.price);
            const qty = parseInt(this.value);
            const maxStock = parseInt(this.getAttribute('max')); // Ambil nilai max (stock)
            
            if (qty > maxStock) {
                alert(`Stock hanya tersedia ${maxStock} unit.`);
                this.value = maxStock; // Set nilai qty ke max stock
                return;
            }

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
