
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
    

    <!-- coba buat tabel -->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/main.css">



    <style type = "text/css">
        #ekspress {
        background-color: white;
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../img/spices.jpg");
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
    <title>Hubert Catering - Admin</title>
</head>

<body>
    <!-- START NAV -->
    <nav class="text-dark">
        <div class="nav-container">
            <div id="nav-branding" class="fs-3">
                <a href="utamaadmin.php">
                    <h1 class="text-primary mr-2 theme-font">
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

    
    
    <!-- <header class="ekspress">
        <div class="carousel">

        </div>
    </header> -->


    <header id="ekspress">
      <div class="header-content mb-5">
        <h4 class="theme-font text-center mb-1 mt-5 text-white fs-4">List Pelanggan
        </h4>
      </div>
    </header>
    <!-- END HEADER -->

    <!-- START GALLERY -->
    <section id="gallery" class="p-5">
        <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                List Pelanggan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Handphone</th>
                                <th>Email</th>
                                <th>Operasi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Handphone</th>
                                <th>Email</th>
                                <th>Operasi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                $hasil = mysqli_query($link, "SELECT * from pelanggan order by nama asc"); 
                                $no = 1;
                                while($r = mysqli_fetch_array($hasil)){
                                    echo "<tr>"
                                        .    "<td align='center'>$no.</td>"
                                        .    "<td>". strtoupper($r['nama'])." </td>"
                                        .    "<td> $r[alamat] </td>"
                                        .    "<td> $r[handphone] </td>"
                                        .    "<td> $r[email] </td>"
                                        .    "<td align='center'>" 
                                        .    "<a href='hapus.php?id_pelanggan=$r[id_pelanggan]' onclick=\"return confirm('Apakah anda yakin ingin menghapus " .strtoupper($r['nama'])."?');\" class='btn btn-danger btn-sm'>Hapus</a></td>"
                                 .    "</tr>";
                                    $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
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
    <script src="../js/styles.js"></script>

    <!-- buat coba tabel -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
    <!-- sampe sini {% endcomment -->
</body>

</html>