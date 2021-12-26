<?php
    session_start();
    include '../inc/koneksi.php';
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, md5($_POST['password']));
    // md5nya belom

    $sql1 = mysqli_query ($link, "select * from admin where username = '$username' and password = '$password'");
    $check1 = mysqli_num_rows($sql1);

    if($check1>0){
        $_SESSION['status_login_admin']   = 'Berhasil Login!';
        $_SESSION['pesan'] = 'Berhasil Login!';
        $_SESSION['username'] = $username;
        header("location:utamaadmin.php");

    }else{
        $_SESSION['pesan'] = 'Gagal Login! Kemungkinan username atau password salah.';
        echo $_SESSION['pesan'];
        header("location:index.php");
    }
?>