<?php
require 'functions.php';

// ketika tombol register ditekan, proses fungsi registrasi
if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
              </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/92333b2848.js" crossorigin="anonymous"></script>

    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>
        <center>Halaman Registrasi</center>
    </h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>

            <li>
                <label for="password">Password :</label>
                <input type="text" name="password" id="password">
            </li>

            <li>
                <label for="password2">Password2 :</label>
                <input type="text" name="password2" id="password2">
            </li>
            <br><br>
            <button type="submit" name="register">Registrasi</button>
        </ul>
    </form>

    <!-- Link Jquery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</body>
</html>