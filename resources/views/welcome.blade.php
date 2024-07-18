@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
        <div class="Home" id="home" style="min-height:100vh; display: flex; align-items:center">
            <img src="{{asset('assets/image/awal.jpg')}}" alt="Product Image"
                style="width: 400px; border-radius: 3vh; margin-left: 80px;">
            <div class="isian" style="margin-left: 50px;">
                <div class="mari">
                    <h1 style="font-weight: bold; font-size:50px;">Accessories <br> that make you feel <br> confident
                        and beautiful!</h1>
                </div>
                <p style="font-family:Poppins;margin-top:40px;">Mari kita warnai hidup kita dengan cerita unik dan kenangan indah, dan
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
                <div class="klikan" style="margin-top:50px;">
                    <button class="btn-indx1"><a href="#categories"
                            style="color: black; font-size:20px; font-weight:bold; text-decoration:none;">Catalog</a></button>
                    <button class="btn-indx2"><a href="#contact"
                            style="color: black; font-size:20px; font-weight:bold; text-decoration:none;">Contact
                            Us</a></button>
                </div>
            </div>
        </div>

        <!-- Product Section -->
        <div class="Categories" id="categories" style="min-height:100vh">
            <div class="isianka">
                <div class="judul1">
                    <h2 style="margin-left: 50px; font-size:40px; font-weight:bold; margin-top:-50px;">Our Collection</h2>
                    <h3 style="margin-left: 50px; font-size:25px; font-weight:bold; margin-top:20px;">
                        Mencari perhiasan yang indah dan berkualitas tinggi tanpa menguras kantong?
                    </h3>
                </div>
                <p style="margin-left: 50px;font-family:Poppins;">Haptycraft adalah jawabannya! Kami menawarkan berbagai macam perhiasan
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
            <div class="container2" id="categories" style="align-items:center margin-top:20px;">
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

         <!-- Contact Us Section -->
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
        @endsection
