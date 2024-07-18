@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<main style="background-color: #f8f9fa;">
    <div class="container py-5">
        <h2 class="text-center mb-4" style="font-weight:bold">Checkout</h2>
        <div class="row" style="margin-top:50px;">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Shipping Information</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Full Name:</strong> {{ $shippingInfo->fullname }}</p>
                        <p><strong>Address:</strong> {{ $shippingInfo->address }}</p>
                        <p><strong>Postal Code:</strong> {{ $shippingInfo->postalcode }}</p>
                        <p><strong>Phone Number:</strong> {{ $shippingInfo->phone }}</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header x">
                        <h5>Order Summary</h5>
                    </div>
                    <div class="card-body x">
                        <table class="table table-bordered">
                            <thead>
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
                                    <td>{{ $item->produk->nama }}</td>
                                    <td>Rp. {{ number_format($item->produk->harga, 0, ',', '.') }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>Rp. {{ number_format($item->produk->harga * $item->qty, 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4"><strong>Total :</strong></td>
                                    <td  style="font-weight:bold;">Rp. {{ number_format($total, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><strong>Discount (30%) :</strong></td>
                                    <td style="font-weight:bold;">Rp. {{ number_format($total * 0.3, 0, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <td colspan="4"><strong>Final Total :</strong></td>
                                    <td style="font-weight:bold;">Rp. {{ number_format($total * 0.7, 0, ',', '.') }}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="text-right">
                            <button class="btn btn-primary">Purchase</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
