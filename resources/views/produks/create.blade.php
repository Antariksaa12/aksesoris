<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <style>
        .bg-custom-color {
            background-color: #789461 !important;
        }
    </style>
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="w-50">
            <h2 class="text-center mb-4">Tambah Produk</h2>

            <form method="post" action="{{ route('produks.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Jual:</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
                <button type="submit" class="btn bg-custom-color text-light my-3">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>