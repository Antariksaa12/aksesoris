<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custome.css') }}">
    <title>@yield('title') - Haptycraft</title>
    <script src="https://kit.fontawesome.com/ba558f5520.js" crossorigin="anonymous"></script>
    <!-- Notif -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 

</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #365E32;">
            <div class="container">
                <a class="navbar-brand fs-6" href="#" style="font-weight: bold;">HAPTYCRAFT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fs-8" aria-current="page" href="/welcome" style="font-weight: bold;">Home</a>
                        </li>
                        <li class="kategori">
                            <a class="nav-link fs-8" aria-current="page" href="/produk" style="font-weight: bold;">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-8" href="#contact" style="font-weight: bold;">Contact Us</a>
                        </li>
                    </ul>

                    <div class="notif">
                            <a href="{{route('cart.show')}}" class="fs-4" style="text-decoration:none;">
                                <span class="fa-solid icon-nav fa-bag-shopping ms-1"></span>
                                <span id="cart-count" class="badge badge-danger" style="color:#FFBF00;padding-left:2px;">{{ session('cart_count', 0) }}</span>
                            </a>
                    </div>

                    <button class="btn btn-outline-dark" type="submit" style="background-color:#FFBF00;width:100px;">
                        <a href="{{ route('login') }}" style="text-decoration:none; color:#000;"> Login </a>
                    </button>
                </div>
            </div>
        </nav>

    </header>

    <main style="background-color: #365E32; width: 100%;">
        @yield('content')
    </main>

    <footer style="background-color: #365E32; padding: 10px;">
        <p style="text-align: center; color: white;">&copy; 2024 Haptycraft. All rights reserved.</p>
        <div class="info">
            <p><span>Info:</span> antariksaa12@gmail.com</p>
            <p><span>Phone:</span> 082119154532</p>
            <p><span>Address:</span> Subang</p>
            <p><span>Hours:</span> 09:00-18:00</p>
        </div>
    </footer>


    @if(session()->has('flash_notification'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: '{{ session('flash_notification')['message'] }}',
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
    @endif

    <!-- Include jQuery for the AJAX request -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Function to update cart count -->
    <script>
        function updateCartCount() {
            $.ajax({
                url: "{{ route('cart.count') }}",
                method: "GET",
                success: function(data) {
                    $('#cart-count').text(data.count);
                }
            });
        }

        $(document).ready(function() {
            // Call the function on page load
            updateCartCount();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
</html>
