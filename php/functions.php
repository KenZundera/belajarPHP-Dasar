<?php

// Koneksi Ke Database
$conn = mysqli_connect('localhost', 'root', '', 'siswa');

function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function hapus($nis)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM biodata_xiirpl3 WHERE nis = '$nis'");

    return mysqli_affected_rows($conn);
}

function tambah($data)
{
    global $conn;

    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $alamat = htmlspecialchars($data['alamat']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $nama_ibu = htmlspecialchars($data['nama_ibu']);
    $nama_bapak = htmlspecialchars($data['nama_bapak']);

    $sql = "INSERT INTO biodata_xiirpl3
			VALUES ('$nis', '$nama', '$kelas', '$jenis_kelamin', '$alamat', '$no_hp', '$nama_ibu', '$nama_bapak')";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $nis = $data['nis'];
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $alamat = htmlspecialchars($data['alamat']);
    $no_hp = htmlspecialchars($data['no_hp']);
    $nama_ibu = htmlspecialchars($data['nama_ibu']);
    $nama_bapak = htmlspecialchars($data['nama_bapak']);

    $sql = "UPDATE biodata_xiirpl3 SET
                nama = '$nama',
                kelas = '$kelas',
                jenis_kelamin = '$jenis_kelamin',
                alamat = '$alamat', 
                no_hp = '$no_hp',
                nama_ibu = '$nama_ibu',
                nama_bapak = '$nama_bapak'
            WHERE nis = '$nis'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $sql = "SELECT * FROM biodata_xiirpl3 WHERE
                nis LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                kelas LIKE '%$keyword%' OR
                jenis_kelamin LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%' OR
                no_hp LIKE '%$keyword%' OR
                nama_ibu LIKE '%$keyword%' OR
                nama_bapak LIKE '%$keyword%'";

    return query($sql);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    $tgl_lahir = mysqli_real_escape_string($conn, $data['tgl_lahir']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $agama = mysqli_real_escape_string($conn, $data['agama']);
    $jenis_kelamin = mysqli_real_escape_string($conn, $data['jenis_kelamin']);

    // cek username sudah ada atau belum
    $result = mysqli_query(
        $conn,
        "SELECT username FROM user WHERE username = '$username'"
    );

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query(
        $conn,
        "INSERT INTO user VALUES('', '$username', '$passwordhash', '$tgl_lahir', '$email', '$agama', '$jenis_kelamin')"
    );
    return mysqli_affected_rows($conn);
}

// function login($data)
// {
//     global $conn;

//     $user = $conn->query('SELECT * FROM user');

//     foreach ($user as $row) {
//         $pass = $row['password'];
//     }

//     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//         $username = htmlspecialchars($data['username']);
//         $password = htmlspecialchars($data['password']);
//         $verify = password_verify($password, $pass);

//         $sql_login = $conn->query(
//             "SELECT * FROM user WHERE username = '$username' AND password = '$password_hash'"
//         );

//         // cek username
//         if ($verify) {
//             $_SESSION['username'] = $data['username'];
//             $_SESSION['password'] = $data['password'];
//             header('Location: ../index.php');
//         } else {
//             header('location: login.php?gagal');
//         }
//     }
// }

?>
