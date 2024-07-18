@extends('layouts.admin')
@section('title', 'Edit Product')
@section('content')
<div class="container">
    <h1>Edit Product</h1>
    <form action="{{ route('admin.produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $produk->nama) }}">
        </div>
        <div class="form-group">
            <label for="gambar">Image</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar" >
            <img src="{{ asset('assets/image/' . $produk->gambar) }}" alt="{{ $produk->nama }}" width="100">
        </div>
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $produk->harga) }}">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $produk->stock) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
