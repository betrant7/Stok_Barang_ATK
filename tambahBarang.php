<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idBarang = $_POST['idBarang'];
    $namaBarang = $_POST['namaBarang'];
    $jumlah = $_POST['jumlah'];

    require 'koneksi.php';
    $query = "INSERT INTO stokbarang (idBarang, namaBarang, jumlah) VALUES ('$idBarang', '$namaBarang', '$jumlah')";
    mysqli_query($con, $query);
    mysqli_close($con);
    
    header("Location: stokATK.php");
    exit;
}
?>