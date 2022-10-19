<?php
require 'functions.php';
$NIS = $_GET['nis'];

$siswa = query("SELECT * FROM biodata_xiirpl3 WHERE nis = $NIS")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('data berhasil diubah');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('data gagal diubah');
                    document.location.href = '../index.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data - PHP Dasar</title>
</head>
<body>
    <h1><center>DAFTAR SISWA KELAS XII RPL</center></h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nis">NIS :</label>
                <input type="text" name="nis" id="nis" required value="<?= $siswa[
                    'nis'
                ] ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $siswa[
                    'nama'
                ] ?>">
            </li>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas" required value="<?= $siswa[
                    'kelas'
                ] ?>">
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" required value="<?= $siswa[
                    'jenis_kelamin'
                ] ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required value="<?= $siswa[
                    'alamat'
                ] ?>">
            </li>
            <li>
                <label for="no_hp">No HP : </label>
                <input type="text" name="no_hp" id="no_hp" required value="<?= $siswa[
                    'no_hp'
                ] ?>">
            </li>
            <li>
                <label for="nama_ibu">Nama Ibu :</label>
                <input type="text" name="nama_ibu" id="nama_ibu" required value="<?= $siswa[
                    'nama_ibu'
                ] ?>">
            </li>
            <li>
                <label for="nama_bapak">Nama Bapak :</label>
                <input type="text" name="nama_bapak" id="nama_bapak" required value="<?= $siswa[
                    'nama_bapak'
                ] ?>">
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>

