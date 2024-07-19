@extends('layouts.app')

@section('title', 'Thank You')

@section('content')
<main style="background-color: #f8f9fa;">

    <div class="container py-5 text-center">
        <h2>Thank you for your order!</h2>
        <p>Your items will be shipped to the provided address. You will receive a tracking number on your phone.</p>
        <p></p>

        <a href="{{route('produk')}}" class="btn btn-light pro" >See More Product</a>

    </div>
</main>
@endsection
