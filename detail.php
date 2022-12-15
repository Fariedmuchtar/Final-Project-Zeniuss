<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- PARTIAL CSS INCLUSIONS -->
    <link rel="stylesheet" href="./assets/css/partials/0-fonts.css" />
    <link rel="stylesheet" href="./assets/css/partials/1-variables.css" />
    <link rel="stylesheet" href="./assets/css/partials/2-reset.css" />
    <link rel="stylesheet" href="./assets/css/partials/3-typography.css" />
    <link rel="stylesheet" href="./assets/css/partials/4-component.css" />

    <!-- CUSTOM CSS INCLUSIONS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- RESPONSIVITY CSS INCLUSIONS -->
    <link rel="stylesheet" href="./assets/css/responsivity/media-queries.css" />

    <!-- FAVICON LINK -->
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon" />

    <!-- TITLE OF THE PAGE -->
    <title>Tawaeli.News| The Official News Portal | <?php echo $page_title; ?></title>

    <!-- FONTAWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
</head>

<body>

    <!-- ======== BACK TO TOP BUTTON ======== -->
    <button onclick="topFunction()" class="topNavBtn" id="topNavBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>


    <!-- ======== NAVBAR ======== -->
    <nav class="navbar">
        <div class="logo"><a href="./index.php"><img src="./assets/images/Tawaeli.png" /></a></div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn" class="input" />
        <ul class="ul">
            <!-- We ECHO class current based upon the boolean variables used in above PHP Snippet -->
            <li><a href="./index.php" class="current">Home</a></li>
            <li>
                <label for="btn-1" class="show">Categories +</label>
                <a href="./categories.php" class="current">Categories</a>
                <input type="checkbox" id="btn-1" class="input" />
                <ul>
                    <li><a href="articles.php?id=">Kategori 1</a></li>
                    <li><a href="articles.php?id=">Kategori 2</a></li>
                    <li><a href="articles.php?id=">Kategori 3</a></li>
                    <li><a href="./categories.php">More +</a></li>
                </ul>
            </li>
            <li><a href="./bookmarks.php" class="current">Bookmarks</a></li>
            <li>
                <label for="btn-2" class="show">Login +</label>
                <a href="./user-login.php" class="current">Login</a>
                <input type="checkbox" id="btn-2" class="input" />
                <ul>
                    <li><a href="./user-login.php">Reader</a></li>
                    <li><a href="./author-login.php">Author</a></li>
                </ul>
            </li>
            <li>
                <a href="./search.php" class="current">
                    <span>Search</span>
                    <i id="search-icon" class="fas fa-search"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- detail -->
    <section class="article py-1 category-list">
        <div class="container">
            <article class="card">
                <h1 class="heading">NASA LUNCURKAN ARTEMIS KE BULAN, 'ROKET TERKUAT MENINGGALKAN BUMI'</h1>
                <img src="./assets/images/articles/article-1.jpg" alt="">
                <p>
                    Sistem peluncuran antariksa (SLS) sepanjang 100 meter itu memunculkan perpaduan cahaya dan suara yang luar biasa ketika lepas landas dari Bumi.
                    Misi Artemis adalah mengantarkan kapsul astronaut ke Bulan.
                    N﻿amun dalam penerbangan khusus kali ini, pesawat ruang angkasa bernama Orion itu tidak berawak.
                    A﻿stronot manusia baru akan mengawaki Orion untuk misi ke Bulan apabila peluncurannya kali ini berjalan sesuai harapan.
                    Peluncuran roket pada Rabu (16/11) ini merupakan kelanjutan dari dua upaya pada Agustus dan September lalu yang batal pada detik-detik jelang peluncurannya akibat kendala teknis.
                    N﻿amun persoalan teknis itu kali ini telah diatasi. SLS pun memulai perjalanannya dari Kennedy Space Center pada pukul 01:47 waktu setempat (13.47 WIB).
                    “Hari ini kita menyaksikan roket terkuat di dunia meninggalkan Bumi dan menyingkirkan kendala-kendalanya,” kata manajer misi Artemis NASA, Mike Sarafin.
                    “Kami memiliki satu misi prioritas yang berjalan sekarang.”
                    Administrator NASA, Bill Nelson juga kagum dengan apa yang dia saksikan.
                    “Itu adalah nyala api terbesar yang pernah saya lihat, gelombang kejut paling akustik yang pernah saya alami,” kata Nelson.
                    “Yang kami saksikan malam ini menurut saya patut diberi nilai A+, tapi jalan kami masih panjang. Ini baru uji terbang.”
                </p>
                <p>Roket ini memiliki sejumlah manuver penting yang harus dilakukan jauh di atas Bumi untuk membawa kapsul Orion ke jalur yang benar menuju Bulan.
                    Menurut manajer program SLS NASA, John Honeycutt, semuanya berjalan “luar biasa”.
                    Orion akan mengandalkan modul propulsi Eropa untuk menggiringnya dengan aman menuju Bulan pada sisa misinya.
                    “Akan ada beberapa manuver penting dari modul layanan kami, juga saat kami menyempurnakan arah penerbangan Orion,” kata Direktur penerbangan manusia luar angkasa Badan Antariksa Eropa, David Parker kepada BBC News.
                    “Salah satu momen yang sangat menarik akan terjadi ketika kami menyisipkan orbitnya ke jalur yang sangat menarik di sekitar Bulan, jauh melampaui Bulan untuk pertama kalinya.”
                    Pada Desember ini, NASA akan merayakan peringatan 50 tahun Apollo 17, kali terakhir manusia berjalan di Bulan.
                    NASA menamai program barunya sebagai Artemis, yang merupakan saudara kembar Apollo dalam mitologi Yunani.
                    NASA juga merencanakan serangkaian misi yang semakin kompleks pada dekade berikutnya yang hasilnya diharapkan berupa kehadiran berkelanjutan di Bulan, dengan kehadiran habitat pada permukaan Bulan serta pengerahan robot penjelajah, berbarengan dengan stasiun ruang angkasa mini di orbit sekitar Bulan.
                    Misi ini diharapkan menjadi inspirasi baru untuk era yang baru.
                    M﻿ereka menjanjikan pelibatan perempuan dan orang dengan kulit berwarna dalam misi ini, yang tidak terjadi 50 tahun lalu.
                    “Saya ingin menjadi astronot sejak saya berusia lima tahun,” kata astronaut Jessica Meir.
                    “Bagi siapa pun yang memiliki mimpi, ketika melihat seseorang yang memiliki kesamaan, itu akan membuat mereka berpikir, ‘Orang itu seperti saya dan mereka melakukannya supaya saya juga bisa melakukannya.”
                    Orion akan menjalani misi selama 26 hari yang membawanya ke orbit retrogade jauh di Bulan.
                    Pada titik terdekatnya dengan Bulan, Orion hanya akan berjarak 100 kilometer dari permukaan Bulan. Sedangkan jarak terjauhnya mencapai 70.000 kilometer.
                    Ini adalah jarak terjauh dari Bumi yang pernah dijelajahi oleh pesawat ruang angkasa mana pun.
                    Orion dijadwalkan kembali ke Bumi pada 11 Desember.</p>
            </article>
        </div>

    </section>
    </div>
    </div>


    <!-- detail-->


    <!-- Script for form Validation -->
    <script src="./assets/js/form-validate.js"></script>

    <!--? ======== FOOTER ======== -->
    <footer class="footer">
        <div class="footer-left">
            <a href="./index.php"><img src="./assets/images/Tawaeli.png" /></a>
            <p>
                Titik pengumpulan berita Seputar Kecamatan Tawaeli. Kami menghadirkan kepada Anda kejadian terkini di seluruh Wilayah bagian utara
                dari penulis yang terhormat. Pastikan untuk membaca dan mengikuti kami melalui platform yang kami hadirkan untuk Anda ini. Tawaeli.News
            </p>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h2>Quick Links</h2>
                <ul class="box">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./categories.php">Categories</a></li>
                    <li><a href="./bookmarks.php">Bookmarks</a></li>
                    <li><a href="./search.php?trending=1">Trending</a></li>
                </ul>
            </li>
            <li>
                <h2>Categories</h2>
                <ul class="box">
                    <li><a href="articles.php?id=">Kategori 1</a></li>
                    <li><a href="articles.php?id=">Kategori 2</a></li>
                    <li><a href="articles.php?id=">Kategori 3</a></li>
                    <li><a href="./categories.php">More +</a></li>
                </ul>
            </li>
            <li>
                <h2>Join Us</h2>
                <ul class="box">
                    <li>
                        Bagikan cerita dengan kata-kata Anda sendiri kepada dunia. Untuk Menginspirasi dengan tulisan Anda,
                        jadikan Tawaeli.News platform Anda untuk membantu menghadirkan kisah dunia kepada semua orang.
                    </li>
                    <a href="./author-login.php" class="my-1 btn btn-secondary">Sign Up</a>
                </ul>
            </li>
        </ul>
        <div class="footer-bottom">
            <p>All Rights Reserved by &copy; fariedmuchtar <?php echo date("Y") ?></p>
        </div>
    </footer>

    <!-- JQUERY SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- SCRIPT FOR BACK TO TOP BUTTON -->
    <script src="../assets/js/back-to-top.js"></script>

    <!-- SCRIPT FOR NAVBAR COLLAPSE -->
    <script src="../assets/js/navbar-collapse.js"></script>
</body>

</html>