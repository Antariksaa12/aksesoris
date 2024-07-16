<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts/googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"
        integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{asset('css/custome.css')}}">
    <title>HAPTYCRAFT</title>
    <script src="https://kit.fontawesome.com/ba558f5520.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #365E32;">
            <div class="container">
                <a class="navbar-brand fs-6" href="#" style="font-weight:bold;">HAPTYCRAFT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fs-8 active" aria-current="page" href="#home"
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
                            style="background-color: #FFBF00; font-weight:bold">
                            <a href="{{route('login')}}">
                                Login
                            </a>
                        </button>
                        <div class="notif">
                            <a href="{{route("keranjang")}}" class="fs-5">
                                <i class="fa-solid icon-nav fa-bag-shopping ms-3 "></i>
                            </a>
                        </div>
                    </div>
                </div>
        </nav>
    </header>
    <main>
        <div class="container my-5">
            <h1 class="text-center mb-4">Your Product</h1>
            <table class="table table-bordered">
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
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="ring1.jpg" alt="Whisper Ring" class="me-3" style="width: 50px; height: 50px;">
                                <div>
                                    <p class="mb-0">WHISPER RING</p>
                                    <p class="mb-0">Gold, M</p>
                                </div>
                            </div>
                        </td>
                        <td>$25.00</td>
                        <td><input type="number" value="1" min="1" class="form-control"></td>
                        <td>$25.00</td>
                        <td><a href="#" class="text-danger">×</a></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="ring2.jpg" alt="Shield Ring" class="me-3" style="width: 50px; height: 50px;">
                                <div>
                                    <p class="mb-0">SHIELD RING</p>
                                    <p class="mb-0">Gold, M</p>
                                </div>
                            </div>
                        </td>
                        <td>$46.00</td>
                        <td><input type="number" value="1" min="1" class="form-control"></td>
                        <td>$46.00</td>
                        <td><a href="#" class="text-danger">×</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div class="text-end">
                    <p>Subtotal: $71.00</p>
                    <p>Discount(s): -$10.00</p>
                    <p>Shipping + tax: <a href="#">Est. shipping + tax</a></p>
                    <p>Grand total: $60.00</p>
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
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html> -->
