<?php
include 'koneksi.php';

@session_start();


@$status_admin = $_SESSION['status_login_admin'];
@$status_user = $_SESSION['status_login_user'];
@$pesan = $_SESSION['pesan'];

if (($status_admin!='Berhasil Login!') and ($status_user!='Berhasil Login!')){
    $_SESSION['pesan'] = "Anda harus login terlebih dahulu!";
    header('location:login.php');
}

?>