<?php
include '../inc/koneksi.php';
include '../inc/session.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico"> -->
    <!-- booystrap -->
    <link href="../css/styles.css" rel="stylesheet" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/main.css">
    
    <link href="https://fonts.googleapis.com/css?family=Kulim+Park|Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a465367bb1.js" crossorigin="anonymous"></script>
    <title>Hubert Catering - Admin</title>
</head>

<body>
    <!-- START NAV -->
    <nav class="text-dark">
        <div class="nav-container">
            <div id="nav-branding" class="fs-3">
                <a href="utamaadmin.php">
                    <h1 class="text-white mr-2 theme-font">
                        <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering - admin
                    </h1>
                </a>
                
            </div>
            <ul class="text-white text-bold fs-1">
                <li class="p-1 m-1"><a href="logoutadmin.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a></li>               
            </ul>
        </div>
    </nav>
    <!-- END NAV -->

    
    </header>
    <header id="header-shopping-cart">
        <div class="carousel">
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START GALLERY -->
    <section id="gallery" class="p-5">
        <div class="container">
            <div class="row">
            <div class="col-xl-4 col-md-7">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Daftar Menu</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-7">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Riwayat Transaksi</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>                
                <div class="col-xl-4 col-md-7">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">List Pelanggan</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="listpelanggan.php">Detail</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END GALLERY -->

    
    <!-- BEGIN RESERVATION -->

    <!-- END RESERVATION -->

    <!-- BEGIN FOOTER -->
    <footer class="bg-dark text-white py-3" style="margin-top: 100px;">
      <div class="container">
            <h2 class="theme-font text-center">
                <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering
            </h2>
        </div>
    </footer>
    <!-- END FOOTER -->
    <!-- bootstrap -->
    <script src="../js/scripts.js"></script>
    <!-- bootstrap -->
    <script>
        if (window.matchMedia("(min-width: 1200px")) {
            const head = document.getElementsByTagName('head')[0];
            const script = document.createElement('script');
            script.src = './js/carousel.js';
            head.appendChild(script);
        }
    </script>
    <script src="../js/styles.js"></script>
</body>

</html>

