@extends('layouts.admin')
@section('title', 'Add Product')
@section('content')
<div class="container">
    <h1>Add New Product</h1>
    <form action="{{ route('admin.produks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
        </div>
        <div class="form-group">
            <label for="gambar">Image</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
@endsection
