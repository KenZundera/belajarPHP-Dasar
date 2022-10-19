<?php
require 'connection/connect.php';
require 'php/functions.php';

ob_start();
session_start();
if (!isset($_SESSION['username'])) {
    header('location: php/login.php');
}

//  var global user session
$id_user = $_SESSION['username'];

// ambil data atau query data siswa
$siswa = query('SELECT * FROM biodata_xiirpl3 ORDER BY nama ASC');

// tombol cari ditekan
if (isset($_POST['cari'])) {
    $siswa = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar - PWEB</title>

    <!-- Link Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->

    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/solid.min.css">
    <!-- <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script> -->

    <style>
        .username {
            border: none;
            color: rgb(255, 255, 255);
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 8px 2px;
            border-radius: 0.375rem;
        }
        .header-m {
            margin-bottom: 20px;
        }
        .kiri-form {
            float: right;
        }

        table thead tr th {
            background-color: #000;
            color: #fff;
        }
        
        table tr:nth-child(even) {
            background-color: #212529;
        }

        table tr:nth-child(odd) {
            background-color: #2c3034;
        }

        .cf {
            content: "";
            display: table;
            clear: both;
        }

        h1 {
            font-size: 2.5rem;
            color: #fff;
            font-weight: bold;
            margin-top: 10px;
        }

        .data-nf {
            /* make class data-nf alert danger */
            background-color: #dc3545;
            color: #fff;
            padding: 10px;
            margin: 0px 0px 10px 0px;
            border-radius: 0.375rem;
            max-width: 50%;
        }
    </style>
</head>
<body class="p-2">
    <audio hiddens> 
        <source src="assets/audio/omaga.mp3" type="audio/mpeg">
    </audio>

    <marquee behavior="alternate" direction=""><h1>DAFTAR SISWA XII RPL 3</h1></marquee>

    
    <form action="" method="post" class="header-m">
        <a href="php/tambah.php" class="tbl-submit" role="button">Tambah Data</a>
        <input class="" width="30" type="search" autofocus="" placeholder="Cari.." autocomplete="off" id="keyword" name="keyword">
        <!-- <button class="btn btn-outline-success" type="submit" id="tombol-cari" name="cari">Cari</button> -->

        <!-- if session login is true  -->
        <?php if (isset($_SESSION['username'])) { ?>
            <a href="php/logout.php" class="tbl-hapus kiri-form" role="button">Logout</a>
            <div class="username kiri-form">
                <?= $_SESSION['username'] ?>
            </div>
        <?php } else { ?>
            <a href="php/registrasi.php" class="tbl-tambah kiri-form" role="button">Registrasi</a>
            <a href="php/login.php" class="tbl-tambah kiri-form" role="button">Login</a>
        <?php } ?>
    </form>


    <!-- make show table php -->
    <?php
    $sql = 'SELECT * FROM biodata_xiirpl3 ORDER BY no_hp ASC';
    $result = $conn->query($sql);
    $i = 1;
    ?>
    <div id="container1">
        <table class="" cellpadding="15" cellspacing="0">
            <thead>
                <tr class="">
                    <th>#</th>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Hp</th>
                    <th>Nama Ibu</th>
                    <th>Nama Bapak</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <?php foreach ($siswa as $data): ?>
                <!-- <tbody> -->
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $data['nis'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['kelas'] ?></td>
                        <td><?= $data['jenis_kelamin'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['no_hp'] ?></td>
                        <td><?= $data['nama_ibu'] ?></td>
                        <td><?= $data['nama_bapak'] ?></td>
                        <td>
                            <a href="php/ubah.php?nis=<?= $data[
                                'nis'
                            ] ?>" class="tbl-edit"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                            <a href="php/hapus.php?nis=<?= $data[
                                'nis'
                            ] ?>" onclick="return confirm('yakin?')" class="tbl-hapus"><i class="fa-sharp fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <!-- </tbody> -->
                    
                <?php endforeach; ?>
        </table>
    </div>

    
    <script src="js/search.js"></script>

    <!-- Link Jquery -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</body>
</html>