<?php
    session_start();
    include 'inc/koneksi.php';
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, md5($_POST['password']));
    // md5nya belom


    $sql2 = mysqli_query ($link, "select * from pelanggan where username = '$username' and password = '$password'");
    $check2 = mysqli_num_rows($sql2);

    if(($check2>0)){
        $_SESSION['status_login_user']   = 'Berhasil Login!';
        $_SESSION['pesan'] = 'Berhasil Login!';
        $_SESSION['username'] = $username;
        header("location:utama.php");

    }else{
        $_SESSION['pesan'] = 'Gagal Login! Kemungkinan username atau password salah.';
        echo $_SESSION['pesan'];
        header("location:login.php");
    }
?>