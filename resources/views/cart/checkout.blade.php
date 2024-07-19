@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<main style="background-color: #f8f9fa;">
    <div class="container py-5">
        <h2 class="text-center mb-4" style="font-weight:bold">Checkout</h2>
        <div class="row" style="margin-top:50px;">
            <div class="col-4">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="3" class="text-center" style="padding:15px;background-color:#FFBF00;color:#000;">Shipping Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:left;"><strong>Full Name:</strong></td>
                            <td style="text-align:left;"><strong>:</strong></td>
                            <td style="text-align:left;">{{ $shippingInfo->fullname }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;"><strong>Address:</strong></td>
                            <td style="text-align:left;"><strong>:</strong></td>
                            <td style="text-align:left;">{{ $shippingInfo->address }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;"><strong>Postal Code:</strong></td>
                            <td style="text-align:left;"><strong>:</strong></td>
                            <td style="text-align:left;">{{ $shippingInfo->postalcode }}</td>
                        </tr>
                        <tr>
                            <td style="text-align:left;"><strong>Phone Number:</strong></td>
                            <td style="text-align:left;"><strong>:</strong></td>
                            <td style="text-align:left;">{{ $shippingInfo->phone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-8">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th colspan="5" class="text-center" style="padding:15px;background-color:#FFBF00;color:#000;">Order Summary</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="text-align:left;">{{ $item->produk->nama }}</td>
                            <td style="text-align:right;">Rp. {{ number_format($item->produk->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->qty }}</td>
                            <td style="text-align:right;">Rp. {{ number_format($item->produk->harga * $item->qty, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"><strong>Total :</strong></td>
                            <td style="font-weight:bold; text-align:right;">Rp. {{ number_format($total, 0, ',', '.') }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <form action="{{ route('purchase.store') }}" method="POST" class=" text-center">
                @csrf
                <input type="hidden" name="shippingInfoId" value="{{ $shippingInfo->id }}">
                <input type="hidden" name="cartItems" value="{{ json_encode($cartItems) }}">
                <button type="submit" class="btn btn-warning" style="font-weight:bold;padding:15px;width:1300px;;margin-top:20px;">Purchase Your Order</button>
            </form>
        </div>
    </div>
</main>
@endsection
