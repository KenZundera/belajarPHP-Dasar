<?php
require 'functions.php';
//cek button tambah data apakah sudah disubmit atau belum
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = '../index.php';
			  </script>";
    } else {
        echo "<script>
				alert('data gagal ditambahkan!');
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
    <title>Tambah Data Siswa Kelas</title>

    <!-- Link Bootstrap
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>

    <style>
        body {
            /* make neon background circle */
            background: radial-gradient(circle, #0D0D0D, #030BA6, #040FD9, #1B0273, #580259);
            background-repeat: no-repeat;
            background-size: 100% 200%;
            color: #fff;
        }
    </style>
</head>
<body bgcolor="#FFE4C4">
    <h1><center>DAFTAR SISWA KELAS XII RPL 3</center></h1>

    <form action="" method="POST">
      <ul>
        <li>
            <label for="nis">NIS :</label>
            <input type="text" name="nis" id="nis" required>
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="kelas">Kelas :</label>
            <!-- <input type="text" name="kelas" id="kelas" required> -->
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="" disabled selected>Pilih Kelas</option>
                <option value="X RPL">X RPL</option>
                <option value="X ANM">X ANM</option>
                <option value="X DKV">X DKV</option>
                <option value="XI RPL 1">XI RPL 1</option>
                <option value="XI RPL 2">XI RPL 2</option>
                <option value="XI RPL 2">XI RPL 2</option>
                <option value="XI ANM 1">XI ANM 1</option>
                <option value="XI ANM 2">XI ANM 2</option>
                <option value="XI DKV 1">XI DKV 1</option>
                <option value="XI DKV 2">XI DKV 2</option>
                <option value="XII RPL 1">XII RPL 1</option>
                <option value="XII RPL 2">XII RPL 2</option>
                <option value="XII RPL 3">XII RPL 3</option>
                <option value="XII ANM 1">XII ANM 1</option>
                <option value="XII ANM 2">XII ANM 2</option>
                <option value="XII ANM 3">XII ANM 3</option>
                <option value="XII DKV 1">XII DKV 1</option>
                <option value="XII DKV 2">XII DKV 2</option>
                <option value="XII ANM 3">XII ANM 3</option>

            </select>
        </li>
        <li>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <!-- <input type="text" name="jenis_kelamin" id="jenis_kelamin" required> -->
            <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </li>
        <li>
            <label for="alamat">Alamat :</label>
            <input type="text" name="alamat" id="alamat" required>
        </li>
        <li>
            <label for="no_hp">No HP :</label>
            <input type="number" name="no_hp" id="no_hp" required>
        </li>
        <li>
            <label for="nama_ibu">Nama Ibu :</label>
            <input type="text" name="nama_ibu" id="nama_ibu" required>
        </li>
        <li>
            <label for="nama_bapak">Nama Bapak :</label>
            <input type="text" name="nama_bapak" id="nama_bapak" required>
        </li>
        <li>
            <button type="submit" name="tambah">Tambah Data</button>
        </li>
      </ul>
    </form>
    
    <!-- Link Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
