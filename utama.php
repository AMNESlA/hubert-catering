<?php
include 'inc/koneksi.php';
include 'inc/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico"> -->
    
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Kulim+Park|Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a465367bb1.js" crossorigin="anonymous"></script>
    <title>Hubert Catering</title>
    
</head>

<body>
    <!-- START NAV -->
    <nav class="text-dark">
        <div class="nav-container">
            <div id="nav-branding" class="fs-3">
                <a href="profil.php">
                    <h1 class="text-white mr-2 theme-font">
                        <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering - <strong><h3><?= $_SESSION['username']; ?></h3></strong>
                    </h1>
                </a>
                <div id="hamburger">
                    <div class="middle-line"></div>
                    <div class="top-line"></div>
                    <div class="bottom-line"></div>
                </div>
            </div>
            <ul class="text-white text-bold fs-1">
                <li class="p-1 m-1"><a class="current" href="utama.php">Home</a></li>
                <li class="p-1 m-1"><a href="keranjang.php"><i class="fas fa-shopping-cart"><span id="cart-count">0</span></i></a></li>
                <li class="p-1 m-1"><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a></li>
                
            </ul>
        </div>
    </nav>
    <!-- END NAV -->

    <!-- START HEADER -->
    <header id="header">
        <div class="header-content">
            <h4 class="text-center text-white fs-3">Selamat Datang</h4>
            <div id="huge-heading" class="theme-font text-center mb text-white fs-5">Hubert Catering</div>
            <p class="text-white text-center mb-1">.</p>
            <a href="menu.php" class="btn-outline-primary fs-2">Lihat Menu</a>
            <h4 class="text-center text-white fs-3 mt-5">Silahkan klik pada username anda untuk mengedit profil</h4>
        </div>
        <div class="carousel">
            <img class="carousel-current" src="./img/fruit-salads.jpg" alt="Fruit Salads">
            <img src="./img/spaghetti-sauce.jpg" alt="Spaghetti Sauce">
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START ABOUT -->
    <section id="about">
        <div class="container py-5">
            <div id="about-img">
                <img src="./img/restaurant.jpg" alt="Restaurant tables">
            </div>
            <div id="about-content">
                <h1 class="theme-font fs-4 text-center mb-4">our commitment</h1>
                <p class="text-grey mb-2 fs">Menjadi perusahaan yang dapat menjalankan kerjasama berdasarkan komitmen yang saling menguntungkan dan dapat dipercaya
                </p>
                <p class="text-grey mb-2 fs">Memberikan pelayanan sesuai dengan SOP</p>
                <p class="text-grey mb-2 fs">Menjamin kebersihan dan nilai gizi makanan sampai ke tangan pelanggan</p>
                <p class="text-grey mb-2 fs">Menjalankan prosedur pengelolaan jasa boga sesuai dengan peraturan pemerintah
                </p>
            </div>
    </section>
    <!-- END ABOUT -->




    <!-- START GALLERY -->
    <section id="gallery" class="p-5">
        <div class="container">
            <h2 class="text-center fs-4 mb-4"><span class="underlined-heading">Our Specialties</span></h2>
            <div id="gallery-container">
                <div class="gallery-row">
                    <div class="gallery-photo">
                        <img src="./img/burger.jpg" alt="Burger">
                        <div class="gallery-overlay">
                            <h2>Burgers</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/chocolate_dessert.jpg" alt="chocolate dessert">
                        <div class="gallery-overlay">
                            <h2>Chocolate Desserts</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/pancake.jpg" alt="pancakes">
                        <div class="gallery-overlay">
                            <h2>Pancakes</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/tomato_pizza.jpg" alt="tomato pizza">
                        <div class="gallery-overlay">
                            <h2>Tomato Pizza</h2>
                        </div>
                    </div>
                </div>
                <div class="gallery-row">
                    <div class="gallery-photo">
                        <img src="./img/burrito.jpg" alt="Burrito">
                        <div class="gallery-overlay">
                            <h2>Burritos</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/avocado_toast.jpg" alt="Avocado toast">
                        <div class="gallery-overlay">
                            <h2>Avocado Toast</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/coffee.jpg" alt="Coffee">
                        <div class="gallery-overlay">
                            <h2>Coffee</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/cheesecake.jpg" alt="Cheeescake">
                        <div class="gallery-overlay">
                            <h2>Cheesecake</h2>
                        </div>
                    </div>
                </div>
                <div class="gallery-row">
                    <div class="gallery-photo">
                        <img src="./img/meat_pasta.jpg" alt="Meat Pasta">
                        <div class="gallery-overlay">
                            <h2>Meat Pasta</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/skewers.jpg" alt="Skewers">
                        <div class="gallery-overlay">
                            <h2>Skewers</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/veggie_soup.jpg" alt="Veggie Soup">
                        <div class="gallery-overlay">
                            <h2>Veggie Soup</h2>
                        </div>
                    </div>
                    <div class="gallery-photo">
                        <img src="./img/pink_cocktail.jpg" alt="Pink Cocktail">
                        <div class="gallery-overlay">
                            <h2>Cocktails</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GALLERY -->

    <!-- START SERVICES -->
    <section id="services" class="bg-light">
        <div id="service-cards" class="container">
            <div class="service-card">
                <i class="fas fa-truck"></i>
                <h3 class="mb-2">Delivery</h3>
                <p class="text-grey">Kami memiliki penawaran pengiriman yang bagus. Jika Anda cukup dekat, kami juga akan memberi Anda pengiriman gratis </p>
            </div>
            <div class="service-card">
                <i class="fas fa-glass-cheers"></i>
                <h3 class="mb-2">Event Catering</h3>
                <p class="text-grey">Ulang tahun, wisuda, pernikahan Kami memiliki suguhan yang akan membuat semua tamu senang. </p>
            </div>
            <div class="service-card">
                <i class="fas fa-phone"></i>
                <h3 class="mb-2">Personal Orders</h3>
                <p class="text-grey">Suka sesuatu di menu kami dan ingin membuatnya lebih baik untuk Anda sendiri? Beri tahu kami, dan kami akan mencoba memperbaikinya.</p>
            </div>
        </div>
    </section>

    <!-- END SERVICES -->

    <!-- BEGIN RESERVATION -->

    <!-- END RESERVATION -->

    <!-- BEGIN FOOTER -->
    <footer class="bg-dark text-white py-3">
        <div class="container">
            <h2 class="theme-font text-center"><i class="text-primary fas fa-pepper-hot"></i> Hubert Catering</h2>
            <!-- <ul>
                <li class="px-3"><a href="https://twitter.com/" rel="noopener" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li class="px-3"><a href="https://www.facebook.com/" rel="noopener" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="px-3"> <a href="https://www.instagram.com/" rel="noopener" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul> -->
        </div>
    </footer>
    <!-- END FOOTER -->
   

    <script>
        if (window.matchMedia("(min-width: 1200px")) {
            const head = document.getElementsByTagName('head')[0];
            const script = document.createElement('script');
            script.src = './js/carousel.js';
            head.appendChild(script);
        }
    </script>
    <script src="./js/styles.js"></script>
</body>

</html>