<?php
    session_start();
    include 'inc/koneksi.php';
 
    $nama       = mysqli_real_escape_string($link, $_POST['nama']);
    $alamat     = mysqli_real_escape_string($link, $_POST['alamat']);
    $handphone  = mysqli_real_escape_string($link, $_POST['handphone']);
    $email      = mysqli_real_escape_string($link, $_POST['email']);
    $username   = mysqli_real_escape_string($link, $_POST['username']);
    $password   = mysqli_real_escape_string($link, md5($_POST['password']));

    mysqli_query($link, "insert into pelanggan set  nama='$nama', "
    . " alamat ='$alamat', handphone ='$handphone',"
    . " email = '$email', "
    . " username = '$username', password = '$password'");

    $_SESSION['pesan'] = 'Berhasil daftar! Silahkan masukkan username dan password yang telah didaftarkan!';

    header("location:login.php");  
?>