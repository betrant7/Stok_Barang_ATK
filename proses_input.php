<?php
        require 'koneksi.php';

        $namaPegawai = $_POST['namaPegawai'];
        $email = $_POST['email'];
        $noTelpon = $_POST['noTelpon'];
        $password = $_POST['password'];

        $query_sql = "INSERT INTO pegawai VALUE ('$namaPegawai','$email','$noTelpon','$password')";
        
        if(mysqli_query($con,$query_sql)){
            header("location:index.php");
        } else {
            echo "Pendaftaran gagal : ".mysqli_error($con);
        }
?>