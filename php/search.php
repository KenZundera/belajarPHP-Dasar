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
<?php if ($conn->affected_rows < 1): ?>
    <div class="alert alert-danger mt-3" role="alert">
        Data tidak ditemukan
    </div>
<?php else: ?>
    <table class="table table-striped" cellpadding="15" cellspacing="0">
        <thead>
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
        </thead>
            <?php
            $i = 1;
            $show = $conn->query($sql);
            $no = 1;
            while ($data = mysqli_fetch_array($show)) { ?>
                <tbody>
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
                </tbody>
                <?php }
            ?>
        </table>
<?php endif; ?>
