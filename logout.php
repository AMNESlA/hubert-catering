<?php
    session_start();
    session_destroy();
    header("location:login.php");
    session_start();
    $_SESSION['pesan'] = 'Berhasil Logout!';
    echo $_SESSION['pesan'];
    //session pesan itu udah buat2 (login & logout)
?>