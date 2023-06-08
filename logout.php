<?php
    // Proses logout
    session_start();
    session_destroy();

    // Mengarahkan ke halaman login
    header("location: index.php");
    exit;
?>
