<?php
require 'functions.php';

$keyword = $_GET['keyword'];

// fungsi ini untuk menjalankan fungsi live search pada database, statement ini tidak boleh dihapus supaya live search bekerja

$sql = "SELECT * FROM biodata_xiirpl3 WHERE
                nis LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                kelas LIKE '%$keyword%' OR
                jenis_kelamin LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%' OR
                no_hp LIKE '%$keyword%' OR
                nama_ibu LIKE '%$keyword%' OR
                nama_bapak LIKE '%$keyword%'";

$conn->query($sql);
?>
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
<?php if ($conn->affected_rows < 1): ?>
    <div class="data-nf" role="alert">
        Data tidak ditemukan
    </div>
<?php else: ?>
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
            <?php
            $i = 1;
            $show = $conn->query($sql);
            $no = 1;
            while ($data = mysqli_fetch_array($show)) { ?>
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
                <?php }
            ?>
        </table>
<?php endif; ?>
