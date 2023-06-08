<?php
include("koneksi.php");
if (isset($_GET["idBarang"])){
    $idBarang = $_GET["idBarang"];

    $query = "DELETE FROM stokbarang WHERE idBarang = '$idBarang'";
    $result = mysqli_query($con, $query);

    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($con). " - ".mysqli_error($con));
    }
}

header("location:stokATK.php");
?>