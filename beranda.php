<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Stok Barang - Beranda</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        h2 {
            text-align: center;
            padding-top: 30px;
            padding-left: 15px;
            padding-right: 15px;
            font-size: 35px;
            color: whitesmoke;
        }
        h1{
            text-align: center;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 60px;
            color: red;
        }
        .boxs {
            position: fixed;
            display: block;
            margin: 30px 60px 30px 60px;
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            background-color: rgb(3, 3, 71);
        }
        .boxs p {
            font-size: 25px;
            color: white;
            padding: 20px;
            line-height: 45px;
        }
    </style>
</head>
<body>
    <div class="wadah_flex">
        <div class="sidebar">
            <header>PT. Maju Makmur</header>
            <ul>
                <li><a href="beranda.php">Dashboard</a></li>
                <li><a href="stokATK.php">Stok ATK</a></li>
                <li><a href="logout.php">Log Out</a></li>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </ul>
            <footer>copyright2023@betrant_UAS</footer>
        </div>
        <div class="main">
            <div class="atas"></div>
            <div class="boxs">
                <h2>SELAMAT DATANG DI WEBSITE STOK BARANG ATK</h2>
                <h1>PT. MAJU MAKMUR GROUP</h1><br><br>
                <p>Website ini digunakan untuk mempermudah dalam memonitoring stok barang kebutuhan ATK yang ada di gudang.
                    User dapat menambahkan barang baru, mengedit barang, menghapus barang sesuai kebutuhan yang sedang dijalankan.
                    Dalam web ini terdapat sistem CRUD yang datanya akan disimpan dalam database. Terdapat mekanisme login dan Pendaftaran.
                    Tujuan dibuatnya web ini untuk memenuhi tugas UAS desain & pemrograman web.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
