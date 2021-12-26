<?php
    session_start();
    include 'inc/koneksi.php';
 
    $nama          = mysqli_real_escape_string($link, $_POST['nama']);
    $alamat        = mysqli_real_escape_string($link, $_POST['alamat']);
    $handphone     = mysqli_real_escape_string($link, $_POST['handphone']);
    $email         = mysqli_real_escape_string($link, $_POST['email']);
    $id_pelanggan  = mysqli_real_escape_string($link, $_POST['id_pelanggan']);

    mysqli_query($link, "update pelanggan set  nama='$nama', "
    . " alamat ='$alamat', handphone ='$handphone',"
    . " email = '$email' where id_pelanggan ='$id_pelanggan'");  

    header("location:utama.php");
?>