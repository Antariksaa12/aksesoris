<!-- resources/views/produks/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #365E32;">
            <div class="container">
                <a class="navbar-brand fs-6" href="#" style="font-weight:bold">HAPTYCRAFT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fs-8 active" aria-current="page" href="{{route('welcome')}}"
                                style="font-weight:bold">Home</a>
                        </li>
                        <li class="kategori">
                            <a class="nav-link fs-8 active" aria-current="page" href="#categories"
                                style="font-weight:bold">Product</a>
                        </li>
                        <a class="nav-link fs-8" href="#contact" style="font-weight:bold">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center justify-content-around">
                        <button class="btn btn-outline-dark" type="submit"
                            style="background-color: #FFBF00; font-weight:bold">User</button>
                        <div class="notif">
                            <a href="{{route('view.cart')}}" class="fs-5">
                                <i class="fa-solid icon-nav fa-bag-shopping ms-3 "></i>
                            </a>
                        </div>
                        </d>
                    </div>
                    <div class="tombol">
                        <button>
                            <a href="{{route('produks.index')}}">Atur Produk</a>
                        </button>
                    </div>
                </div>
    </header>
    @if (session('success'))
        <div class="alert alert-success my-3">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger my-3">
            {{ session('error') }}
        </div>
    @endif
    <h2 class="mt-2">Master Data > Data Produk</h2>

    <div class="mb-3 mt-5">
        <form action="{{ route('produks.index') }}" method="GET" class="form-inline">
            <div class="form-group mr-sm-3 mb-2">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" id="search" name="search" placeholder="Search"
                    value="{{ request('search') }}">
            </div>
            <button type="submit" class="btn bg-custom-color text-light mb-2">Search</button>
            @if(request()->has('search'))
                <a href="{{ route('produks.index') }}" class="btn btn-secondary mb-2 ml-2">Reset</a>
            @endif
        </form>
    </div>
    <table class="table table-bordered my-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jenis</th>
                <th>Harga Jual</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->gambar }}</td>
                    <td>Rp.{{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('produks.edit', $produk->id) }}"
                            class="btn btn-primary text-light btn-sm">Edit</a>
                        <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('produks.create') }}" class="btn btn-primary text-light">Tambah Produk</a>
</body>

</html>