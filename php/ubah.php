<?php
require 'functions.php';

ob_start();
session_start();
// Jika session login tidak ada maka kembali ke halaman login
if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit();
}

$NIS = $_GET['nis'];

$siswa = query("SELECT * FROM biodata_xiirpl3 WHERE nis = $NIS")[0];

if (isset($_POST['ubah'])) {
    $_SESSION['login'] = true;
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('data berhasil diubah');
                    document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                    alert('data gagal diubah');
                    // document.location.href = '../index.php';
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
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin: 1.25rem 0 2rem 0;
        }

        form {
            width: 100%;
            max-width: 600px;
            margin: 0rem auto;
            border-radius: 5px;
            font-size: 1rem;
            padding: 1.25rem;
            box-shadow: #fff 0 0 10px;
            margin-bottom: 5rem;
        }

        form ul {
            list-style: none;
        }

        form ul li {
            margin-bottom: 10px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ccc;
            border-radius: 0.375rem;
            margin-bottom: 30px;
            line-height: 1.5;
            font-size: 1rem;
        }

        form input:last-child {
            margin-bottom: 10px;
        }

        form input:focus {
            outline: none;
            box-shadow: #90c6fd 0px 0 5px 2px;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;	
        }

        form input::placeholder {
            color: #999;
            font-size: 1rem;
        }

        form .flex-footer .footer .tbl-tambah{
            width: 45%;
            height: 40px;
            padding: 0.375rem 0.75rem;
            border: 0;
            border-radius: 5px;
            background-color: #0d6efd;
            color: #fff;
            cursor: pointer;
            font-size: 1rem;
            line-height: 1.5rem;
            text-align: center;
            box-sizing: border-box;
        }

        form .flex-footer .footer .tbl-hapus{
            width: 45%;
            height: 40px;
            border: 0;
            border-radius: 5px;
            background-color: #dc3545;
            color: #fff;
            cursor: pointer;
            font-size: 1rem;
            line-height: 1.5rem;
            text-align: center;
            box-sizing: border-box;
            text-decoration:none;
        }

        form .tbl-hapus:hover{
            background-color: #c42e3d;
        }

        form .tbl-tambah:hover {
            background-color: #1b82e9;
        }

        form .error {
            color: #ff0000;
            font-size: 12px;
        }

        .data-nf {
            /* make class data-nf alert danger */
            background-color: #dc3545;
            color: #fff;
            padding: 10px;
            margin: 0px 0px 20px 0px;
            border-radius: 0.375rem;
            max-width: 100%;
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        img {
            border-radius: 10px;
        }
        
    </style>
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
                <!-- <input type="text" name="kelas" id="kelas" required value="<?= $siswa[
                    'kelas'
                ] ?>"> -->
                <select name="kelas" id="kelas">
                <option value="<?= $siswa['kelas'] ?>" selected><?= $siswa[
    'kelas'
] ?></option>
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
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <select name="jenis_kelamin" id="jenis_kelamin">
                <option value="<?= $siswa[
                    'jenis_kelamin'
                ] ?>" selected><?= $siswa['jenis_kelamin'] ?></option>
                <?php if ($siswa['jenis_kelamin'] == 'L') {
                    echo "<option value='P'>P</option>";
                } else {
                    echo "<option value='L'>L</option>";
                } ?>
            </select>
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
            <div class="flex-footer">
                <div class="footer">
                    <button type="submit" name="ubah" class="tbl-tambah">Ubah</button>
                    <a href="../index.php" class="tbl-hapus" role="button">Kembali
                    </a>
                </div>
            </div>
        </ul>
    </form>
</body>
</html>

