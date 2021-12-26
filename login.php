<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hubert Catering - Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">


                    <?php
                        session_start();
                        if(isset($_SESSION['pesan'])){
                    ?>                    
                    <br>
                    <div class="container-fluid">
                        <div class="alert alert-secondary alert-dismissible fade show mt-2" role="alert">

                            <?= $_SESSION['pesan']; ?>
                                
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <?php
                            session_unset($_SESSION['pesan']);
                        }
                        
                    ?>


                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="proseslogin.php" method = "post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input class="form-control py-4" name="username" type="text" placeholder="Masukkan username" required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" type="password" placeholder="Massukan password" required/>
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-lg btn-block btn-outline-primary" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="daftar.php">Belum punya akun? Daftar di sini!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>


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
    </body>
</html>
