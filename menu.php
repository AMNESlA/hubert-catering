<?php
include 'inc/koneksi.php';
include 'inc/session.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico" /> -->
    <link href="https://fonts.googleapis.com/css?family=Kulim+Park|Lobster&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a465367bb1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css" />
    <title>Hubert Catering - Menu</title>
</head>

<body>
    <nav class="text-dark">
        <div class="nav-container">
            <div id="nav-branding" class="fs-3">
                <a href="utama.php">
                    <h1 class="text-white mr-2 theme-font">
                        <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering - <strong>
                            <h3><?= $_SESSION['username']; ?></h3>
                        </strong>
                    </h1>
                </a>
                <div id="hamburger">
                    <div class="middle-line"></div>
                    <div class="top-line"></div>
                    <div class="bottom-line"></div>
                </div>
            </div>
            <ul class="text-white text-bold fs-1">
                <li class="p-1 m-1">
                    <a href="utama.php">Home</a>
                </li>
                <li class="p-1 m-1">
                    <a href="keranjang.php"><i class="fas fa-shopping-cart"><span id="cart-count">0</span></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <header id="header-menu">
        <div class="header-content">
            <h1 class="theme-font text-center mb-1 text-white fs-5">Menu</h1>
            <p class="text-white text-center">
                Di sini kami menyediakan berbagai macam pilihan menu. silahkan pilih menu yang anda inginkan.
            </p>
        </div>
    </header>

    <section id="menu" class="bg-light">
        <h2 class="theme-font text-center fs-5 mb-2">Menu</h2>
        <ul id="allergens-desc" class="text-center mb-2">
            <li class="mx-2">
                <span class="vegan"><i class="fas fa-seedling"></i></span> - Vegan
            </li>
            <li class="mx-2">
                <span class="dairy"><i class="fas fa-blender"></i></span>
                - Contains dairy
            </li>
            <li><span class="gluten-free">GF</span> - Gluten Free</li>
        </ul>
        <div id="menu-container" class="p-3">
            <div class="menu-items p-3">
                
            </div>
        </div>
    </section>

    <!-- BEGIN FOOTER -->
    <footer class="bg-dark text-white py-3">
        <div class="container">
            <h2 class="theme-font text-center">
                <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering
            </h2>
            <!-- <ul>
          <li class="px-3">
            <a href="https://twitter.com/" rel="noopener" target="_blank"
              ><i class="fab fa-twitter"></i
            ></a>
          </li>
          <li class="px-3">
            <a href="https://www.facebook.com/" rel="noopener" target="_blank"
              ><i class="fab fa-facebook-f"></i
            ></a>
          </li>
          <li class="px-3">
            <a href="https://www.instagram.com/" rel="noopener" target="_blank"
              ><i class="fab fa-instagram"></i
            ></a>
          </li>
        </ul> -->
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="./js/styles.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>