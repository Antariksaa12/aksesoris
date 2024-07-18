@extends('layouts.admin')
@section('title', 'Product Management')
@section('content')
<div class="container">
    <h1>Manage Products</h1>
    <a href="{{ route('admin.produks.create') }}" class="btn btn-primary mb-3">Add New Product</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
            <tr>                                
                <td>{{ $loop->iteration }}</td>
                <td>{{ $produk->nama }}</td>
                <td><img src="{{ asset('assets/image/' . $produk->gambar) }}" alt="{{ $produk->nama }}" width="50"></td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->stock }}</td>
                <td>
                    <a href="{{ route('admin.produks.edit', $produk->id) }}" class="fa fa-pencil-square-o"></a>
                    <form action="{{ route('admin.produks.destroy', $produk->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="fa fa-trash-o" style="border:none; color:red; background-color:#fff;"></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
