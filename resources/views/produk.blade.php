<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"
        integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <title>HAPTYCRAFT</title>
    <script src="https://kit.fontawesome.com/ba558f5520.js" crossorigin="anonymous"></script>
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
                        <li class="nav-item">
                            <a class="nav-link fs-8" href="#contact" style="font-weight:bold">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center justify-content-around">
                        <button class="btn btn-outline-dark" type="submit"
                            style="background-color: #FFBF00; font-weight:bold">User</button>
                        <div class="notif">
                            <a href="{{route('keranjang')}}" class="fs-5">
                                <i class="fa-solid icon-nav fa-bag-shopping ms-3 "></i>
                            </a>
                        </div>
                    </div>
                    <div class="tombol">
                        <button>
                            <a href="{{route('produks.index')}}">Atur Produk</a>
                        </button>
                    </div>
                </div>
        </nav>
    </header>
    <main style="background-color: #f8f9fa;">
        <section class="hero text-center py-5" style="background-color: #365E32;">
            <div class="container text-white">
                <h1 style="font-weight:bold">Liven up your day with Haptycraft!</h1>
                <p>Get up to 36% off on selected items!</p>
            </div>
        </section>
        <div class="container py-5">
            <h2 class="text-center mb-4" style="font-weight:bold">Products from Haptycraft</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($produks as $produk)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/image/' . $produk->gambar) }}" class="card-img-top" alt="{{ $produk->nama }}">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight:bold">{{ $produk->nama }}</h5>
                            <p class="card-text">{{ $produk->deskripsi }}</p>
                            <p class="card-harga">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                            <button class="btn btn-primary add-to-cart" data-name="{{ $produk->nama }}" data-price="{{ $produk->harga }}">Add To Cart</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container my-5">
            <h1 class="text-center mb-4">Your Product</h1>
            <table class="table table-bordered" id="cart-table">
                <thead>
                    <tr>
                        <th>Product details</th>
                        <th>Unit price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div class="text-end">
                    <p>Subtotal: <span id="subtotal">Rp0</span></p>
                    <p>Discount(s): <span id="discount">-Rp0</span></p>
                    <p>Shipping + tax: <a href="#">Est. shipping + tax</a></p>
                    <p>Grand total: <span id="grand-total">Rp0</span></p>
                </div>
            </div>
            <div class="d-flex justify-content-end gap-3">
                <button class="btn btn-secondary">UPDATE CART</button>
                <button class="btn btn-success">CHECKOUT</button>
            </div>
        </div>
    </main>
    <footer style="background-color: #FFBF00; padding: 10px">
        <p style="text-align:center; color:white">&copy; 2024 Haptycraft. All right reserved.</p>
        <div class="info">
            <p><span>Info:</span> antariksaa12@gmail.com</p>
            <p><span>Phone:</span> 082119154532</p>
            <p><span>Address:</span> Subang</p>
            <p><span>Hours:</span> 09:00-18:00</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybGPSmQFeJ65SZY1WkzvT02+7lRV0F0OAyRbI8z9hjk6tJn6g"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuGIIz6XpiTmW4HhnanBX5jaKz1bb0isjHCYa9u6i+JdF42Y5Hf4CJOjnE5IWo+N"
        crossorigin="anonymous"></script>
    <script>
        const cart = [];

        function updateCart() {
            const cartTable = document.querySelector("#cart-table tbody");
            cartTable.innerHTML = "";
            let subtotal = 0;
            cart.forEach((item, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>Rp${item.price.toLocaleString()}</td>
                    <td><input type="number" value="${item.quantity}" min="1" class="form-control quantity" data-index="${index}"></td>
                    <td>Rp${(item.price * item.quantity).toLocaleString()}</td>
                    <td><button class="btn btn-danger btn-sm remove-from-cart" data-index="${index}">Remove</button></td>
                `;
                cartTable.appendChild(row);
                subtotal += item.price * item.quantity;
            });
            document.getElementById("subtotal").textContent = `Rp${subtotal.toLocaleString()}`;
            document.getElementById("grand-total").textContent = `Rp${subtotal.toLocaleString()}`;
        }

        document.querySelectorAll(".add-to-cart").forEach(button => {
            button.addEventListener("click", () => {
                const name = button.getAttribute("data-name");
                const price = parseInt(button.getAttribute("data-price"));
                const existingItem = cart.find(item => item.name === name);
                if (existingItem) {
                    existingItem.quantity++;
                } else {
                    cart.push({ name, price, quantity: 1 });
                }
                updateCart();
            });
        });

        document.querySelector("#cart-table").addEventListener("input", (event) => {
            if (event.target.classList.contains("quantity")) {
                const index = event.target.getAttribute("data-index");
                const newQuantity = parseInt(event.target.value);
                cart[index].quantity = newQuantity;
                updateCart();
            }
        });

        document.querySelector("#cart-table").addEventListener("click", (event) => {
            if (event.target.classList.contains("remove-from-cart")) {
                const index = event.target.getAttribute("data-index");
                cart.splice(index, 1);
                updateCart();
            }
        });
    </script>
</body>

</html>
