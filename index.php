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
    <link rel="icon" href="./assets/images/logo.ico" type="image/x-icon" />

    <!-- TITLE OF THE PAGE -->
    <title> Tawaeli.News| The Official News Portal | <?php echo $page_title; ?></title>

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
                    <li><a href="articles.php?id=">EDUCATION</a></li>
                    <li><a href="articles.php?id=">FOOD</a></li>
                    <li><a href="articles.php?id=">SPORTS</a></li>
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
    <!-- ARTICLE -->

    <section class="py-1 category-list">


        <div class="container">
            <h2 class="headings">Articles</h2>
            <div class="card-container col-4">
                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"><a href="articles.php?id="></a></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            NASA luncurkan Artemis ke Bulan, 'roket terkuat meninggalkan Bumi'
                        </h3>
                        <p class="card-data">
                            Sistem peluncuran antariksa (SLS) sepanjang 100 meter itu memunculkan perpaduan cahaya dan suara yang luar biasa ketika lepas landas dari Bumi.

                            Misi Artemis adalah mengantarkan kapsul astronaut ke Bulan.

                            N﻿amun dalam penerbangan khusus kali ini, pesawat ruang angkasa bernama Orion itu tidak berawak.

                            A﻿stronot manusia baru akan mengawaki Orion untuk misi ke Bulan apabila peluncurannya kali ini berjalan sesuai harapan.
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"><a href="articles.php?id="></a></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            NASA luncurkan Artemis ke Bulan, 'roket terkuat meninggalkan Bumi'
                        </h3>
                        <p class="card-data">
                            Sistem peluncuran antariksa (SLS) sepanjang 100 meter itu memunculkan perpaduan cahaya dan suara yang luar biasa ketika lepas landas dari Bumi.

                            Misi Artemis adalah mengantarkan kapsul astronaut ke Bulan.

                            N﻿amun dalam penerbangan khusus kali ini, pesawat ruang angkasa bernama Orion itu tidak berawak.

                            A﻿stronot manusia baru akan mengawaki Orion untuk misi ke Bulan apabila peluncurannya kali ini berjalan sesuai harapan.
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"><a href="articles.php?id="></a></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            NASA luncurkan Artemis ke Bulan, 'roket terkuat meninggalkan Bumi'
                        </h3>
                        <p class="card-data">
                            Sistem peluncuran antariksa (SLS) sepanjang 100 meter itu memunculkan perpaduan cahaya dan suara yang luar biasa ketika lepas landas dari Bumi.

                            Misi Artemis adalah mengantarkan kapsul astronaut ke Bulan.

                            N﻿amun dalam penerbangan khusus kali ini, pesawat ruang angkasa bernama Orion itu tidak berawak.

                            A﻿stronot manusia baru akan mengawaki Orion untuk misi ke Bulan apabila peluncurannya kali ini berjalan sesuai harapan.
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"><a href="articles.php?id="></a></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            NASA luncurkan Artemis ke Bulan, 'roket terkuat meninggalkan Bumi'
                        </h3>
                        <p class="card-data">
                            Sistem peluncuran antariksa (SLS) sepanjang 100 meter itu memunculkan perpaduan cahaya dan suara yang luar biasa ketika lepas landas dari Bumi.
                            Misi Artemis adalah mengantarkan kapsul astronaut ke Bulan.
                            N﻿amun dalam penerbangan khusus kali ini, pesawat ruang angkasa bernama Orion itu tidak berawak.
                            A﻿stronot manusia baru akan mengawaki Orion untuk misi ke Bulan apabila peluncurannya kali ini berjalan sesuai harapan.
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"><a href="articles.php?id="></a></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            NASA luncurkan Artemis ke Bulan, 'roket terkuat meninggalkan Bumi'
                        </h3>
                        <p class="card-data">
                            Sistem peluncuran antariksa (SLS) sepanjang 100 meter itu memunculkan perpaduan cahaya dan suara yang luar biasa ketika lepas landas dari Bumi.
                            Misi Artemis adalah mengantarkan kapsul astronaut ke Bulan.
                            N﻿amun dalam penerbangan khusus kali ini, pesawat ruang angkasa bernama Orion itu tidak berawak.
                            A﻿stronot manusia baru akan mengawaki Orion untuk misi ke Bulan apabila peluncurannya kali ini berjalan sesuai harapan.
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>

                <a class="card card-more d-flex" href="./index.php">
                    <h3>MORE +</h3>
                </a>

                <div class=" text-center py-2">
                    <div class="pagination">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END ARTICLE -->

    <!-- CATEGORIES -->

    <section class="py-1 category-list">

        <div class="container">
            <h2 class="headings">Categories</h2>
            <div class="card-container col-4">
                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            EDUCATION
                        </h3>
                        <p class="card-data">
                            Pendidikan adalah segalanya untuk bertahan hidup di dunia yang kompetitif ini.
                            apa yang terbaru dalam hal pendidikan dan perlu mendapatkan pendidikan ke setiap bagian dunia dan orang miskin.
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            FOOD
                        </h3>
                        <p class="card-data">
                            Ikuti wisata keliling kuliner dunia. Biarkan diri Anda meleleh dalam rasa dan
                            aroma makanan yang kami bawakan untuk Anda dari setiap masakan yang pernah dilihat dunia.
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>

                <article class="card">
                    <a href="''" class="bookmark" title="Remove from Bookmarks">
                        <i class=" fas fa-bookmark"></i>
                    </a>
                    <div class="card-img">
                        <img src="./assets/images/articles/article-1.JPG" />
                    </div>
                    <div>
                        <div class="tag"></div>
                        <div class="tag tag-new">NEW</div>
                        <div class="tag tag-trend">TRENDING</a></div>
                        <h3 class="card-title">
                            SPORTS
                        </h3>
                        <p class="card-data">
                            Dan itu enam atau GOALLL!!!! adalah beberapa hal yang membuat kita merasa seperti anak kecil. Olahraga, turnamen,
                            dan pertandingan liga, di mana posisi masing-masing tim, apa yang baru di dunia olahraga??
                        </p>
                        <a href="detail.php" class="btn btn-card">Read More <span>&twoheadrightarrow; </span>
                        </a>
                    </div>
                </article>




                <div class=" text-center py-2">
                    <div class="pagination">
                    </div>
                </div>

    </section>

    <!-- END CATEGORIES -->


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