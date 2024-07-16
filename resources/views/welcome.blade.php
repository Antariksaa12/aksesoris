<!DOCTYPE html>
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
                        </d>
                    </div>
                </div>
        </nav>
    </header>
    <main style="background-color: #365E32; width:100%">
        <div class="Home" id="home" style="min-height:100vh; display: flex; align-items:center">
            <img src="{{asset('assets/image/awal.jpg')}}" alt="Product Image"
                style="width: 400px; border-radius: 3vh; margin-left: 80px;">
            <div class="isian" style="margin-left: 50px;">
                <div class="mari">
                    <h1 style="font-weight: bold; font-size:50px;">Accessories <br> that make you feel <br> confident
                        and beautiful!</h1>
                </div>
                <p>Mari kita warnai hidup kita dengan cerita unik dan kenangan indah, dan
                    biarkan Haptycraft menjadi mitra setia dalam perjalanan menuju kebahagiaan yang tak terlupakan.
                    Setiap langkah yang kita ambil adalah lembaran baru dalam buku kehidupan, di mana setiap halaman
                    diberi warna ceria oleh pengalaman-pengalaman yang kita bagi bersama. Dari jalan-jalan yang kita
                    jelajahi hingga orang-orang yang kita temui, semuanya adalah bagian dari mozaik yang membentuk
                    ingatan-ingatan yang abadi. Bersama Haptycraft, kita menghadirkan lebih dari sekadar momen; kita
                    menciptakan warisan dari setiap tawa, setiap keajaiban, dan setiap cerita yang kita bagikan. Kita
                    belajar, kita tumbuh, dan kita menciptakan makna dalam setiap petualangan yang kita hadapi.
                    Haptycraft bukan sekadar aplikasi, melainkan portal yang membuka jendela menuju kehidupan yang penuh
                    warna dan kegembiraan. Bersama, mari kita terus menulis kisah-kisah baru yang menginspirasi dan
                    meninggalkan jejak kebahagiaan bagi kita dan orang-orang terkasih di sekitar kita.
                </p>
                <div class="klikan">
                    <button class="btn-indx1"><a href="#categories"
                            style="color: black; font-size:20px; font-weight:bold">Catalog</a></button>
                    <button class="btn-indx2"><a href="#contact"
                            style="color: black; font-size:20px; font-weight:bold">Contact
                            Us</a></button>
                </div>
            </div>
        </div>
        <div class="Categories" id="categories" style="min-height:100vh">
            <div class="isianka">
                <div class="judul1">
                    <h2 style="margin-left: 50px; font-size:40px; font-weight:bold">Our Collection</h2>
                    <h3 style="margin-left: 50px; font-size:25px; font-weight:bold">
                        Mencari perhiasan yang indah dan berkualitas tinggi tanpa menguras kantong?
                    </h3>
                </div>
                <p style="margin-left: 50px;">Haptycraft adalah jawabannya! Kami menawarkan berbagai macam perhiasan
                    yang dibuat dengan bahan-bahan
                    terbaik dan pengerjaan yang halus, dengan harga yang terjangkau untuk semua orang. Setiap piece dari
                    koleksi kami tidak hanya mewakili keindahan dalam desainnya, tetapi juga sebuah cerita tentang
                    dedikasi kami untuk kualitas dan kepuasan pelanggan. Mulai dari cincin elegan yang melambangkan
                    cinta abadi hingga gelang yang memancarkan gaya yang trendi, setiap item Haptycraft adalah hasil
                    dari kombinasi keterampilan tangan terampil dan perhatian terhadap detail. Kami percaya bahwa
                    keindahan tidak harus mahal, dan dengan Haptycraft, Anda dapat menemukan perhiasan yang tidak hanya
                    menambah kilauan pada penampilan Anda, tetapi juga bernilai tinggi dalam setiap momen yang Anda
                    kenakan. Bersama kami, mari temukan perhiasan yang mencerminkan kepribadian Anda dan mengabadikan
                    kenangan berharga dalam gaya yang tak terlupakan.</p>
            </div>
            <div class="container2" id="categories" style="align-items:center">
                <div class="bracelet1">
                    <img src="{{asset('assets/image/g1.png')}}" alt="Bracelet" class="bracelet-image"
                        style="width: 55%; margin-left:50px">
                    <div class="bracelet-info">
                        <h3 class="bracelet-title" style="text-align:center">Amethyst Gold</h3>
                        <p style="text-align:justify">Amethyst adalah sejenis batu permata berwarna ungu yang sering
                            dikaitkan dengan ketenangan
                            dan kebijaksanaan.</p>
                        <p class="bracelet-author">By Haptycraft</p>
                    </div>
                </div>
                <div class="bracelet2">
                    <img src="{{asset('assets/image/g2.png')}}" alt="Bracelet" class="bracelet-image"
                        style="width: 55%; margin-left:50px">
                    <div class="bracelet-info">
                        <h3 class="bracelet-title" style="text-align:center">Labradorite</h3>
                        <p style="text-align:justify">Labradorite adalah batu permata yang sering dianggap sebagai batu
                            pelindung. Diyakini bahwa labradorite dapat melindungi pemakainya dari energi negatif.</p>
                        <p class="bracelet-author">By Haptycraft</p>
                    </div>
                </div>
                <div class="bracelet4">
                    <img src="{{asset('assets/image/g4.png')}}" alt="Bracelet" class="bracelet-image"
                        style="width: 55%; margin-left:50px">
                    <div class="bracelet-info">
                        <h3 class="bracelet-title" style="text-align:center">Howlite Serenity</h3>
                        <p style="text-align:justify">Howlite adalah batu yang dikenal dengan warna putih dengan urat
                            abu-abu yang halus.</p>
                        <p class="bracelet-author">By Haptycraft</p>
                    </div>
                </div>
                <div class="bracelet6">
                    <img src="{{asset('assets/image/g6.png')}}" alt="Bracelet" class="bracelet-image"
                        style="width: 55%; margin-left:50px">
                    <div class="bracelet-info">
                        <h3 class="bracelet-title" style="text-align:center">Aventurine</h3>
                        <p style="text-align:justify">Batu aventurine dipercaya memiliki berbagai khasiat, seperti
                            meningkatkan kreativitas,
                            optimisme, dan keberuntungan. Batu ini juga dapat membantu meredakan stres dan kecemasan.
                        </p>
                        <p class="bracelet-author">By Haptycraft</p>
                    </div>
                </div>
            </div>
            <button class="lebih">
                <a href="{{route('produks.indexProduk')}}" class="more-link"
                    style="margin-left: 50px; font-size:23px; font-weight:bold">Lihat Lebih Banyak >></a>
            </button>
        </div>
        <div class="Contact-Us" id="contact" style="min-height:100vh">
            <h1 class="contact-title" style="text-align:left; font-size:40px; font-weight:bold">Contact US</h1>
            <div class="isi3">
                <p>Kami di Haptycraft sangat menghargai masukan dan pertanyaan dari Anda. Jika Anda memiliki pertanyaan
                    seputar layanan kami, ingin memberikan saran, atau membutuhkan bantuan, tim kami siap membantu. Anda
                    dapat menghubungi kami melalui telepon, email, atau langsung datang ke kantor kami di alamat yang
                    tertera di bawah ini. Kami juga menyediakan formulir kontak di situs ini untuk memudahkan Anda dalam
                    menyampaikan pesan. Setiap pesan yang Anda kirimkan sangat berarti bagi kami dan akan kami tanggapi
                    secepat mungkin. Terima kasih telah menghubungi Haptycraft!</p>
            </div>
            <section id="contact">
                <div class="contact-detail">
                    <form action="">
                        <h1>Tell us your problem</h1>
                        <div class="form-group">
                            <div id="input-name" class="input-group">
                                <p><label for="name">Name</label></p>
                                <input type="text" id="name">
                            </div>
                            <div id="input-subject" class="input-group">
                                <p><label for="subject">Subject</label></p>
                                <input type="text" id="subject">
                            </div>
                            <div id="input-email" class="input-group">
                                <p><label for="email">Email</label></p>
                                <input type="email" id="email">
                            </div>
                            <div id="input-phone" class="input-group">
                                <p><label for="phone">Phone Number</label></p>
                                <input type="tel" id="phone">
                            </div>
                            <div id="input-message" class="input-group">
                                <p><label for="message">Message</label></p>
                                <input type="text" id="message">
                            </div>
                        </div>
                        <button class="btn-submit">Submit</button>
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
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

</html>