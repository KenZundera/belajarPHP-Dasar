<?php
require 'functions.php';

ob_start();
session_start();
// Jika session login tidak ada maka kembali ke halaman login
if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit();
}

$nis = $_GET['nis'];

$sql = "DELETE FROM biodata_xiirpl3 WHERE nis = '$nis'";

if (hapus($nis) > 0) {
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = '../index.php';
            </script>";
} else {
    echo "<script>
                alert('data gagal dihapus!');
                document.location.href = '../index.php';
            </script>";
}

return mysqli_affected_rows($conn);
?>
