<?php
    include 'inc/session.php';
    include 'inc/koneksi.php';

    @session_start();

    $username = $_SESSION['username'];
    $sql = mysqli_query($link, "select * from pelanggan where username = '$username'");
    $tampil = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico"> -->
    

    <!-- coba buat tabel -->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/main.css">



    <style type = "text/css">
        #ekspress {
        background-color: white;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/spices.jpg");
        background-repeat: no-repeat;
        background-size: 100vw 25vh;
        background-attachment: fixed;
        position: relative;
        height: 25vh; 
    }
    </style>

    
    <link href="https://fonts.googleapis.com/css?family=Kulim+Park|Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a465367bb1.js" crossorigin="anonymous"></script>
    <title>Hubert Catering - Profil</title>
</head>

<body>
    <!-- START NAV -->
    <nav class="text-dark">
        <div class="nav-container">
            <div id="nav-branding" class="fs-3">
                <a href="utama.php">
                    <h1 class="text-primary mr-2 theme-font">
                        <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering  - <strong><h3><?= $_SESSION['username']; ?></h3></strong>
                    </h1>
                </a>
            </div>
            <ul class="text-white text-bold fs-1">
                <li class="p-1 m-1"><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a></li>               
            </ul>
        </div>
    </nav>
    <!-- END NAV -->

    
    
    <!-- <header class="ekspress">
        <div class="carousel">

        </div>
    </header> -->


    <header id="ekspress">
      <div class="header-content mb-5">
        <h5 class="theme-font text-center mb-1 mt-5 text-white fs-4">Profil Anda
        </h5>
      </div>
    </header>
    <!-- END HEADER -->

    <!-- START GALLERY -->
    <section id="gallery" class="p-5">
        <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Profil
            </div>
            <div class="card-body">
                <form method="post" action="updateprofil.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <table class = "table table-sm table-light">
                        <input type="hidden" name="id_pelanggan" value="<?=$tampil['id_pelanggan']?>">               
                        <tr>
                            <th>Username</th>
                            <td><input type="text"  name="username" value=" <?php echo $tampil['username']; ?>" class= "form-control" disabled></td>
                        </tr>
                        <tr>
                            <th width = "150">Nama</th>
                            <td><input type="text" name="nama"  value= "<?php echo $tampil['nama']; ?>"class= "form-control" placeholder="Masukkan nama anda" pattern= "[a-z, A-Z]{1,50}" required></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td><input type="text"  name="alamat" value=" <?php echo $tampil['alamat']; ?>" class= "form-control" required></td>
                        </tr>

                        <tr>
                            <th>No. Handphone</th>
                            <td><input type="tel"  name="handphone" value=" <?php echo $tampil['handphone']; ?>" class= "form-control" placeholder="Masukkan nomor handphone" type="tel"  pattern="\d\d\d\d\d\d\d\d\d\d\d\d" required></td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td><input type="email"  name="email" value=" <?php echo $tampil['email']; ?>" class= "form-control" placeholder="Masukkan email anda" type="tel" required></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password"  name="password" value=" <?php echo $tampil['password']; ?>" class= "form-control" disabled></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit" class = "btn btn-info">Konfirmasi Perubahan</button> <a href="utama.php" class = "btn btn-secondary">Batal & Keluar Dari Profil</a></td>
                        </tr>                        
                    </table>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- END GALLERY -->

    
    <!-- BEGIN RESERVATION -->

    <!-- END RESERVATION -->

    <!-- BEGIN FOOTER -->
    <footer class="bg-dark text-white py-3" style="margin-top: 20px;">
      <div class="container">
            <h2 class="theme-font text-center">
                <i class="text-primary fas fa-pepper-hot"></i> Hubert Catering
            </h2>
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
    <script src="js/styles.js"></script>

    <!-- buat coba tabel -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <!-- sampe sini {% endcomment -->
</body>

</html>