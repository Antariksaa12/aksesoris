@extends('layouts.app')
@section('title', 'Product')
@section('content')
    <main style="background-color: #ededed;">

        <section class="hero text-center py-5" style="background-color: #365E32;">
            <div class="container text-white">
                <h1 style="font-weight:bold">Liven up your day with Haptycraft!</h1>
                <p>Get up to 36% off on selected items!</p>
            </div>
        </section>

        <div class="container py-5">
            <h2 class="text-center mb-4" style="font-weight:bold">Our Product</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Products -->
                @foreach ($produks as $produk)
                <div class="beet">

                    <div class="card">
                        <img src="{{ asset('assets/image/' . $produk->gambar) }}" class="card-img-top e" alt="{{ $produk->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $produk->nama }}</h5>
                            <p class="card-stock">Sisa {{ $produk->stock }}</p>
                            <!-- <p class="card-text">{{ $produk->deskripsi }}</p> -->
                            <p class="card-harga">Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                <button type="submit" class="btn wow btn-primary">Add To Cart</button>
                            </form>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </main>
    @endsection
