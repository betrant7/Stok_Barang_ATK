<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Pendaftaran</title>    
    <style>
        .gambar {
            text-align: center;
        }
        .gambar img {
            margin-top: 70px;
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
                <b style="font-size: 30px;">Pendaftaran</b>
            </div><br>
            <form action="proses_input.php" method="post">
                <div class="box-input">
                    <input type="text" name="namaPegawai" placeholder="Username" required>
                </div>
                <div class="box-input">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="box-input">
                    <input type="notelpon" name="noTelpon" placeholder="No.HP" required>
                </div>
                <div class="box-input">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="bawah">
                    <p>Punya akun? <a href="index.php">Log in</a> </p>
                </div><br>
                <div>
                    <a class="tombol_batal" href="Pendaftaran.php">Batal</a>
                    <a href="index.php">
                        <button type="submit" name="daftar" class="tombol_login">Daftar</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>