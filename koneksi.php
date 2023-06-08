<?php
$host = "sql210.infinityfree.com";
$user = "if0_34380787";
$passwd = "vS5hvM2ZUX6TQ16";
$name = "if0_34380787_majumakmur";

//proses koneksi
$con = mysqli_connect($host,$user,$passwd,$name);

//periksa koneksi
if(!$con){
    die ("koneksi dengan databasee gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
}
?>