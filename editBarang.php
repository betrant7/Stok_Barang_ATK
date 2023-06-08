<?php
require 'koneksi.php';

$idBarang = $_POST['idBarang'];
$namaBarang = $_POST['namaBarang'];
$jumlah = $_POST['jumlah'];

$query = "UPDATE stokbarang SET namaBarang = '$namaBarang', jumlah = '$jumlah' WHERE idBarang = '$idBarang'";
$result = mysqli_query($con, $query);

if ($result) {
    header("Location: stokATK.php");
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
