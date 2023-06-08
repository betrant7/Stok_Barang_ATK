<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <style>
        .gambar {
            text-align: center;
        }
        .gambar img {
            margin-top: 110px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class="gambar">
        <img src="gambar/logo.png">
    </div>
    <div class="wadah_flex">
        <div class="item">
            <div>
                <b style="font-size: 30px;">Login</b>
            </div><br>
            <form action="proses_login.php" method="post">
                <div class="box-input">
                    <input type="text" name="namaPegawai" placeholder="Username">
                </div>
                <div class="box-input">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="bawah">
                    <p>Belum punya akun? <a href="Pendaftaran.php">Sign up</a> </p>
                </div><br>
                <div>
                    <a class="tombol_batal" href="index.php">Batal</a>
                    <a href="beranda.php">
                        <button type="submit" name="login" class="tombol_login">Login</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
