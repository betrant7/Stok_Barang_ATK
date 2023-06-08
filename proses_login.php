<?php
    require 'koneksi.php';
    $namaPegawai = $_POST["namaPegawai"];
    $password = $_POST["password"];
    $query_sql = "SELECT * FROM pegawai WHERE namaPegawai = '$namaPegawai' AND password = '$password'";

    $result = mysqli_query($con, $query_sql);
    if(mysqli_num_rows($result) > 0){
        header("location:beranda.php");
    } else {
        echo "<script language='javascript'>";
        echo "alert('User atau Password tidak sesuai');";
        echo "window.location.href = 'index.php';";
        echo "</script>";   
    }
?>