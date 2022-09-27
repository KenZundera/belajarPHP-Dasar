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
    <title>Belajar PHP</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>

    <style>
        .kiri-form {
            float: right;
        }
    </style>
</head>
<body class="p-2">
    <audio hidden autoplay loop> 
        <source src="assets/audio/omaga.mp3" type="audio/mpeg">
    </audio>

    <marquee behavior="alternate" direction=""><h1>DAFTAR SISWA XII RPL 3</h1></marquee>

    
    <form action="" method="post" class="mb-3">
        <a href="php/tambah.php" class="btn btn-success" role="button">Tambah Data</a>
        <input class="form-control w-25 me-1 ms-2 d-inline float-right" width="30" type="search" autofocus="" placeholder="Cari.." autocomplete="off" id="keyword" name="keyword">
        <button class="btn btn-outline-success" type="submit" id="tombol-cari" name="cari">Cari</button>

        <!-- if session login is true  -->
        <?php if (isset($_SESSION['username'])) { ?>
            <a href="php/logout.php" class="btn btn-danger float-end" role="button">Logout</a>
        <?php } else { ?>
            <a href="php/registrasi.php" class="btn btn-primary kiri-form" role="button">Registrasi</a>
            <a href="php/login.php" class="btn btn-primary kiri-form" role="button">Login</a>
        <?php } ?>
    </form>


    <!-- make show table php -->
    <?php
    $sql = 'SELECT * FROM biodata_xiirpl3 ORDER BY no_hp ASC';
    $result = $conn->query($sql);
    $i = 1;
    ?>
    <div id="container1">
        <table class="table table-striped" cellpadding="15" cellspacing="0">
            <tr class="table-dark">
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
            <?php foreach ($siswa as $data): ?>
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
                            ] ?>" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                            <a href="php/hapus.php?nis=<?= $data[
                                'nis'
                            ] ?>" onclick="return confirm('yakin?')" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>

    
    <script src="js/search.js"></script>

    <!-- Link Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>