<?php
    include '../inc/koneksi.php';
    $id_pelanggan = $_GET['id_pelanggan'];
    mysqli_query($link, "delete from pelanggan where id_pelanggan='$id_pelanggan'");
    header("location:listpelanggan.php");
 ?>