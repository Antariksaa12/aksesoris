@extends('layouts.admin')

@section('title', 'Admin Purchases')

@section('content')
    <div class="container">
        <h2>Admin Purchases</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Produk</th>
                        <th>Terjual</th>
                        <th>Pembeli</th>
                        <th>Nomor HP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $index => $purchase)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $purchase->created_at }}</td>
                            <td>{{ $purchase->product->nama }}</td>
                            <td>{{ $purchase->quantity }}</td>
                            <td>{{ $purchase->shippingInfo->fullname }}</td>
                            <td>{{ $purchase->shippingInfo->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
