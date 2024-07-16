<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <style>
        .bg-custom-color {
            background-color: #789461 !important;
        }
    </style>
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="w-50">
            <h2 class="text-center mb-4">Edit Produk</h2>

            <form method="post" action="{{ route('produks.update', $produk->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama Produk:</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $produk->nama) }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar:</label>
                    <input type="file" name="gambar" class="form-control" value="{{ old('gambar', $produk->gambar) }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Jual:</label>
                    <input type="number" name="harga" class="form-control" value="{{ old('harga', $produk->harga) }}"
                        required>
                </div>
                <button type="submit" class="btn bg-custom-color text-light my-3">Simpan</button>
        </div>
        </form>
    </div>

</body>

</html>