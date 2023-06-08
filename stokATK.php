<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Stok Barang - Stok Barang</title>
    <link rel="stylesheet" href="css/main.css">
    <script>
        function toggleForm() {
            var formContainer = document.getElementById("form-container");
            formContainer.classList.toggle("show");
        }
        function toggleEditForm() {
            var formEdit = document.getElementById("form-edit");
            formEdit.classList.toggle("show");
        }
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>
</head>
<body>
    <div id="form-container" class="form-container">
        <a href="stokATK.php" class="batal">X</a>
        <h2>Tambah Barang</h2>
        <form action="tambahBarang.php" method="POST">
            <div class="form-group">
                <label for="id">ID Barang :</label>
                <input type="text" id="id" name="idBarang" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Barang :</label>
                <input type="text" id="nama" name="namaBarang" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah :</label>
                <input type="text" id="jumlah" name="jumlah" required>
            </div>
            <div class="form-group">
                <button type="submit">Tambah</button>
            </div>
        </form>
    </div>
    <div id="form-edit" class="form-edit">
        <a href="stokATK.php" class="batal">X</a>
        <h2>Ubah Barang</h2>
        <form action="editBarang.php" method="POST">
            <div class="form-group">
                <label for="id">ID Barang :</label>
                <input type="text" id="id" name="idBarang">
            </div>
            <div class="form-group">
                <label for="nama">Nama Barang :</label>
                <input type="text" id="nama" name="namaBarang">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah :</label>
                <input type="text" id="jumlah" name="jumlah">
            </div>
            <p>NB : ID Barang tidak dapat dirubah, Masukkan sesuai yang dipilih <br><br></p>
            <div class="form-group">
                <button type="submit">Ubah</button>
            </div>
        </form>
    </div>
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
            <div class="bawah">
                <h1>Stok Barang ATK diGudang</h1>
                <button onclick="toggleForm()" class="tambah">Tambah Barang Baru</button>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah /bj</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'koneksi.php';

                        $query = "SELECT * FROM stokbarang";
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $idBarang = $row["idBarang"];
                                $namaBarang = $row["namaBarang"];
                                $jumlah = $row["jumlah"];

                                echo "<tr>";
                                echo "<td>$no</td>";
                                echo "<td>$idBarang</td>";
                                echo "<td>$namaBarang</td>";
                                echo "<td>$jumlah</td>";
                                echo "<td>
                                        <button name='edit' class='tmbEdit' onclick='toggleEditForm()'>Edit</button>
                                        <a href='hapusBarang.php?idBarang=".$row['idBarang']."' onclick='return confirmDelete();'>
                                            <button type='button' name='hapus' class='tmbHapus'>Hapus</button>
                                        </a>
                                      </td>";
                                echo "</tr>";

                                $no++;
                            }
                        } else {
                            echo "<tr>";
                            echo "<td colspan='4'>Tidak ada data stok ATK</td>";
                            echo "</tr>";
                        }

                        mysqli_close($con);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
